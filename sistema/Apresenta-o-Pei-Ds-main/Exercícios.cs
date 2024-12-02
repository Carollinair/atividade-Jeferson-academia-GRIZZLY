using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace projetogym
{
    internal class Exercícios
    {
        public class Exercicio
        {
            public string Nome { get; set; }
            public int Series { get; set; }
            public int Repeticoes { get; set; }
            public double Carga { get; set; }

            public Exercicio(string nome)
            {
                Nome = nome;
            }

            public void DefinirTreino()
            {
                Console.WriteLine($"Exercício: {Nome}");
                Console.Write("Séries: ");
                Series = int.Parse(Console.ReadLine());

                Console.Write("Repetições: ");
                Repeticoes = int.Parse(Console.ReadLine());

                Console.Write("Carga (kg): ");
                Carga = double.Parse(Console.ReadLine());
            }
        }

        public class Musculacao
        {
            public List<Exercicio> Pernas { get; set; } = new List<Exercicio>();
            public List<Exercicio> Peito { get; set; } = new List<Exercicio>();
            public List<Exercicio> Ombros { get; set; } = new List<Exercicio>();
            public List<Exercicio> Trapezio { get; set; } = new List<Exercicio>();
            public List<Exercicio> Costas { get; set; } = new List<Exercicio>();
            public List<Exercicio> Antebraco { get; set; } = new List<Exercicio>();
            public List<Exercicio> Biceps { get; set; } = new List<Exercicio>();
            public List<Exercicio> Triceps { get; set; } = new List<Exercicio>();
            public List<Exercicio> Abdomen { get; set; } = new List<Exercicio>();

            public Musculacao()
            {
               
                Pernas.Add(new Exercicio("\nAgachamento Livre"));
                Pernas.Add(new Exercicio("\nAgachamento no Smith"));
                Pernas.Add(new Exercicio("\nAgachamento Hack"));
                Pernas.Add(new Exercicio("\nLeg Press"));
                Pernas.Add(new Exercicio("\nExtensão"));
                Pernas.Add(new Exercicio("\nAdução"));
                Pernas.Add(new Exercicio("\nAbdução"));
                Pernas.Add(new Exercicio("\nFlexão"));
                Pernas.Add(new Exercicio("\nStiff"));
                Pernas.Add(new Exercicio("\nPanturrilha"));

                Peito.Add(new Exercicio("\nSupino Reto"));
                Peito.Add(new Exercicio("\nSupino Inclinado"));
                Peito.Add(new Exercicio("\nSupino Declinado"));
                Peito.Add(new Exercicio("\nFly Reto"));
                Peito.Add(new Exercicio("\nFly Inclinado"));
                Peito.Add(new Exercicio("\nCrucifixo"));
                Peito.Add(new Exercicio("\nPeck Deck"));
                Peito.Add(new Exercicio("\nCross Over"));
                Peito.Add(new Exercicio("\nParalelas"));

                Ombros.Add(new Exercicio("\nDesenvolvimento Livre"));
                Ombros.Add(new Exercicio("\nDesenvolvimento no Smith"));
                Ombros.Add(new Exercicio("\nDesenvolvimento Halter"));
                Ombros.Add(new Exercicio("\nElevação Lateral"));
                Ombros.Add(new Exercicio("\nElevação Frontal Barra"));
                Ombros.Add(new Exercicio("\nElevação Frontal Halter"));
                Ombros.Add(new Exercicio("\nElevação Posterior"));

                Trapezio.Add(new Exercicio("\nEncolhimento"));
                Trapezio.Add(new Exercicio("\nRemada Alta"));

                Costas.Add(new Exercicio("\nPuxada Frente"));
                Costas.Add(new Exercicio("\nPuxada Atrás"));
                Costas.Add(new Exercicio("\nPulley Frente"));
                Costas.Add(new Exercicio("\nPulley Atrás"));
                Costas.Add(new Exercicio("\nRemada Curvada"));
                Costas.Add(new Exercicio("\nRemada Cavalinho"));

                Antebraco.Add(new Exercicio("\nRosca Inversa"));
                Antebraco.Add(new Exercicio("\nExtensão de Punho"));

                Biceps.Add(new Exercicio("\nRosca Direta"));
                Biceps.Add(new Exercicio("\nRosca Scott"));
                Biceps.Add(new Exercicio("\nRosca Concentrada"));
                Biceps.Add(new Exercicio("\nRosca Martelo"));
                Biceps.Add(new Exercicio("\nRosca Alternada"));

                Triceps.Add(new Exercicio("\nPulley"));
                Triceps.Add(new Exercicio("\nPulley Invertido"));
                Triceps.Add(new Exercicio("\nTesta"));
                Triceps.Add(new Exercicio("\nFrancês"));
                Triceps.Add(new Exercicio("\nMergulho"));

                Abdomen.Add(new Exercicio("\nSupra"));
                Abdomen.Add(new Exercicio("\nInfra"));
                Abdomen.Add(new Exercicio("\nPrancha Frontal"));
                Abdomen.Add(new Exercicio("\nPrancha Lateral"));
            }

            public void ExibirTreinos()
            {
                
                Console.Clear();
                Console.WriteLine("Escolha um grupo muscular para definir o treino:");

                Console.WriteLine("\n1 - Pernas");
                Console.WriteLine("\n2 - Peito");
                Console.WriteLine("\n3 - Ombros");
                Console.WriteLine("\n4 - Trapézio");
                Console.WriteLine("\n5 - Costas");
                Console.WriteLine("\n6 - Antebraço");
                Console.WriteLine("\n7 - Biceps");
                Console.WriteLine("\n8 - Triceps");
                Console.WriteLine("\n9 - Abdômen");

                int escolha = int.Parse(Console.ReadLine());

                List<Exercicio> listaExercicios = escolha switch
                {
                    1 => Pernas,
                    2 => Peito,
                    3 => Ombros,
                    4 => Trapezio,
                    5 => Costas,
                    6 => Antebraco,
                    7 => Biceps,
                    8 => Triceps,
                    9 => Abdomen,
                    _ => null
                };

                if (listaExercicios != null)
                {
                    foreach (var exercicio in listaExercicios)
                    {
                        exercicio.DefinirTreino();
                    }
                }
            }
        }
    }
}
