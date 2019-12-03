<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            ['label'=>'kikoz','reference'=>Str::random(10),
                'tech_sheet'=>'Panneau d\'icônes, de chiffres et de lettres pointés par un laser fixé à une paire de lunettes. Modèle homme ou femme sont proposés pour différencier la désignation anatomique',
                'association_id'=>1,'sub_category_id'=>5],
            ['label'=>'Smartnav 4',
                'reference'=>Str::random(10),
                'tech_sheet'=>"Le Smartnav 4 est une solution technologique complète pour contrôler la souris et le clavier d'un ordinateur sans utiliser les mains. Smartnav permet d’utiliser pleinement et facilement son PC avec une précision, une ergonomie et une efficacité révolutionnaires.",
                'association_id'=>1,'sub_category'=>5],
            ['label'=>'Écho 200',
                'reference'=>Str::random(10),
                'tech_sheet'=>'ASynthèse vocale , une aide à la communication intuitive, performante et nomade. Son écran tactile permet de construire rapidement un message grâce à des modes de saisie variés. Le message est ensuite prononcé de manière claire et distincte par la synthèse vocale de haute qualité.',
                'association_id'=>1,'sub_category'=>6],
            ['label'=>' Écho 300',
                'reference'=>Str::random(10),
                'tech_sheet'=>'Démarrage instantané pour une communication spontanée. Interface conviviale accessible au doigt ou par contacteur. Une ergonomie dédiée à la perte d\'autonomie. Autoadaptation du volume sonore. Mise à jour automatique et à distance. Mobile et autonome, ou connectée à un ordinateur. Assistance technique assurée.',
                'association_id'=>1,'sub_category'=>6],
        ]);
    }
}
