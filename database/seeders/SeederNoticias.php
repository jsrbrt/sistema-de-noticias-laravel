<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Carbon\Carbon;

class SeederNoticias extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //limpa
        News::truncate();

        $dadosNoticias = [
            [
                'titulo' => 'Laravel 11 Revoluciona o Desenvolvimento Web',
                'subtitulo' => 'Nova versão traz recursos inovadores e melhor performance',
                'texto' => 'O Laravel 11 foi lançado com recursos revolucionários que prometem transformar o desenvolvimento web. Entre as principais novidades estão: melhor performance, sintaxe mais limpa, e integração aprimorada com tecnologias modernas. Os desenvolvedores já estão elogiando a facilidade de uso e a produtividade aumentada. Esta versão representa um marco importante na evolução do framework, consolidando sua posição como uma das melhores opções para desenvolvimento web em PHP.',
                'imagem' => 'laravel11.jpg',
                'autor' => 'Maria Silva',
                'created_at' => Carbon::now()->subDays(1), //subtrai tempo
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'titulo' => 'Inteligência Artificial Transforma Programação',
                'subtitulo' => 'IA ajuda desenvolvedores a escrever código mais eficiente',
                'texto' => 'A inteligência artificial está revolucionando a forma como programamos. Ferramentas como GitHub Copilot e ChatGPT estão ajudando desenvolvedores a escrever código mais rapidamente e com menos erros. Estudos mostram que a produtividade aumentou em 40% para desenvolvedores que utilizam essas ferramentas. No entanto, especialistas alertam para a importância de entender o código gerado e não depender completamente da IA.',
                'imagem' => 'ai-programming.jpg',
                'autor' => 'João Santos',
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'titulo' => 'PHP 8.3 Lançado com Novos Recursos',
                'subtitulo' => 'Linguagem continua evoluindo com foco em performance',
                'texto' => 'A nova versão do PHP 8.3 foi oficialmente lançada, trazendo melhorias significativas em performance e novos recursos para desenvolvedores. Destacam-se as melhorias no JIT compiler, novos atributos, e correções de bugs importantes. A comunidade PHP comemora mais esta evolução da linguagem, que continua sendo uma das mais utilizadas no desenvolvimento web mundial.',
                'imagem' => 'php83.jpg',
                'autor' => 'Ana Costa',
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'titulo' => 'Remote Work: O Futuro do Desenvolvimento',
                'subtitulo' => 'Trabalho remoto se consolida na área de tecnologia',
                'texto' => 'O trabalho remoto se tornou a norma na indústria de tecnologia. Empresas relatam maior produtividade e satisfação dos funcionários. Desenvolvedores aproveitam a flexibilidade para equilibrar vida pessoal e profissional. Ferramentas de colaboração online evoluíram rapidamente para suportar equipes distribuídas. Esta tendência parece ser permanente, moldando o futuro do trabalho em tecnologia.',
                'imagem' => 'remote-work.jpg',
                'autor' => 'Pedro Oliveira',
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'titulo' => 'Segurança em Aplicações Web: Guia 2024',
                'subtitulo' => 'Principais vulnerabilidades e como se proteger',
                'texto' => 'A segurança em aplicações web nunca foi tão importante. Com o aumento dos ataques cibernéticos, desenvolvedores precisam estar atentos às melhores práticas. Este guia aborda as principais vulnerabilidades como XSS, SQL Injection, e CSRF, oferecendo soluções práticas e ferramentas para proteger suas aplicações. A prevenção é sempre melhor que a correção.',
                'imagem' => 'web-security.jpg',
                'autor' => 'Carla Mendes',
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'titulo' => 'Docker Simplifica Deploy de Aplicações',
                'subtitulo' => 'Containerização revoluciona a forma de publicar software',
                'texto' => 'Docker transformou a maneira como fazemos deploy de aplicações. A containerização resolve o problema clássico do "funciona na minha máquina", garantindo consistência entre ambientes de desenvolvimento, teste e produção. Empresas relatam redução significativa no tempo de deploy e menor incidência de bugs relacionados ao ambiente. Kubernetes complementa Docker para orquestração em larga escala.',
                'imagem' => 'docker.jpg',
                'autor' => 'Ricardo Lima',
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'titulo' => 'APIs RESTful: Melhores Práticas em 2024',
                'subtitulo' => 'Como construir APIs robustas e escaláveis',
                'texto' => 'APIs RESTful continuam sendo o padrão para comunicação entre sistemas. Este artigo explora as melhores práticas para 2024: versionamento adequado, autenticação segura, documentação clara, e tratamento de erros. Frameworks como Laravel facilitam a criação de APIs seguindo estes padrões. Uma API bem projetada é fundamental para o sucesso de qualquer aplicação moderna.',
                'imagem' => 'api-rest.jpg',
                'autor' => 'Fernanda Rosa',
                'created_at' => Carbon::now()->subDays(7),
                'updated_at' => Carbon::now()->subDays(7),
            ],
            [
                'titulo' => 'Clean Code: Princípios Fundamentais',
                'subtitulo' => 'Escrever código limpo e mantível é uma arte',
                'texto' => 'Código limpo não é apenas uma questão de estética, mas de profissionalismo e manutenibilidade. Seguir princípios como SOLID, usar nomes descritivos, criar funções pequenas e bem definidas, são fundamentais para projetos de sucesso. Investir tempo em código limpo economiza horas de debugging e facilita o trabalho em equipe. É um investimento que sempre vale a pena.',
                'imagem' => 'clean-code.jpg',
                'autor' => 'Marcos Pinto',
                'created_at' => Carbon::now()->subDays(8),
                'updated_at' => Carbon::now()->subDays(8),
            ]
        ];

        //insere
        foreach ($dadosNoticias as $noticia){
            News::create($noticia);
        }

        $this->command->info('SeederNoticias executado com sucesso! ' . count($dadosNoticias) . ' notícias criadas.');
    }
}
