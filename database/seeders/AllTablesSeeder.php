<?php

namespace Database\Seeders;

use App\Models\Stagiaire;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AllTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = fake();
        $now = now();
        $statuses = ['en_attente', 'confirmee', 'annulee', 'terminee'];

        User::factory(10)->create();
        $userIds = User::query()->pluck('id')->all();
        $userEmails = User::query()->pluck('email')->all();

        DB::table('password_reset_tokens')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'email' => $userEmails[$i - 1] ?? "user{$i}@example.com",
                'token' => Str::random(60),
                'created_at' => $now,
            ])->all()
        );

        DB::table('sessions')->insert(
            collect(range(1, 10))->map(fn () => [
                'id' => Str::random(40),
                'user_id' => $faker->randomElement($userIds),
                'ip_address' => $faker->ipv4(),
                'user_agent' => $faker->userAgent(),
                'payload' => base64_encode(json_encode(['demo' => true], JSON_THROW_ON_ERROR)),
                'last_activity' => $now->timestamp,
            ])->all()
        );

        DB::table('cache')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'key' => "cache_key_{$i}",
                'value' => serialize(['index' => $i]),
                'expiration' => $now->copy()->addHour()->timestamp,
            ])->all()
        );

        DB::table('cache_locks')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'key' => "cache_lock_{$i}",
                'owner' => "owner_{$i}",
                'expiration' => $now->copy()->addMinutes(30)->timestamp,
            ])->all()
        );

        DB::table('jobs')->insert(
            collect(range(1, 10))->map(fn () => [
                'queue' => 'default',
                'payload' => json_encode(['displayName' => 'DemoJob'], JSON_THROW_ON_ERROR),
                'attempts' => 0,
                'reserved_at' => null,
                'available_at' => $now->timestamp,
                'created_at' => $now->timestamp,
            ])->all()
        );

        DB::table('job_batches')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'id' => (string) Str::uuid(),
                'name' => "batch_{$i}",
                'total_jobs' => 1,
                'pending_jobs' => 0,
                'failed_jobs' => 0,
                'failed_job_ids' => '[]',
                'options' => null,
                'cancelled_at' => null,
                'created_at' => $now->timestamp,
                'finished_at' => $now->timestamp,
            ])->all()
        );

        DB::table('failed_jobs')->insert(
            collect(range(1, 10))->map(fn () => [
                'uuid' => (string) Str::uuid(),
                'connection' => 'database',
                'queue' => 'default',
                'payload' => json_encode(['job' => 'DemoJob'], JSON_THROW_ON_ERROR),
                'exception' => 'Demo exception',
                'failed_at' => $now,
            ])->all()
        );

        DB::table('clients')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'email' => "client{$i}@example.com",
                'nom' => $faker->lastName(),
                'prenom' => $faker->firstName(),
                'ville' => $faker->city(),
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        DB::table('produits')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'reference' => "REF-{$i}",
                'libelle' => "Produit {$i}",
                'prix' => $faker->randomFloat(2, 10, 1000),
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        DB::table('commandes')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'email_client' => "client{$i}@example.com",
                'reference_produit' => "REF-{$i}",
                'date_commande' => $now->copy()->addDays($i)->toDateString(),
                'quantite' => $faker->numberBetween(1, 5),
                'statut' => $faker->randomElement($statuses),
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        DB::table('patients')->insert(
            collect(range(1, 10))->map(fn () => [
                'nom' => $faker->lastName(),
                'prenom' => $faker->firstName(),
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        DB::table('medecins')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'matricule' => "MED-{$i}",
                'nom' => $faker->name(),
                'specialite' => $faker->jobTitle(),
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        DB::table('rendez_vous')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'num_dossier' => $i,
                'matricule' => "MED-{$i}",
                'date_rdv' => $now->copy()->addDays($i)->toDateString(),
                'heure_rdv' => $faker->time('H:i:s'),
                'statut' => $faker->randomElement($statuses),
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        DB::table('filieres')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'nom_filiere' => "Filiere {$i}",
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        DB::table('groupes')->insert(
            collect(range(1, 10))->map(fn () => [
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        Stagiaire::factory(10)->create();

        DB::table('projets')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'titre' => "Projet {$i}",
                'date_debut' => $now->copy()->subDays($i)->toDateString(),
                'date_fin' => $now->copy()->addDays($i + 7)->toDateString(),
                'budget' => $faker->randomFloat(2, 5000, 100000),
                'location' => $faker->city(),
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        DB::table('etapes')->insert(
            collect(range(1, 10))->map(fn ($i) => [
                'description' => $faker->sentence(8),
                'date_realisation' => $now->copy()->addDays($i)->toDateString(),
                'id_projet' => $i,
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );
    }
}
