using System;
using System.Collections.Generic;
using System.Linq;
using System.Numerics;
using System.Text;
using System.Threading.Tasks;

namespace projetogym
{

    internal class GestãoPlanos
    {
        private List<Planos> planos;
        private List<Aluno> alunos;
        public List<Aluno> Alunos => alunos;
        private List<PersonalTrainer> personalTrainers;
        private int indicePersonalTrainer;

        public GestãoPlanos()
        {
            planos = new List<Planos>();
            alunos = new List<Aluno>();
            personalTrainers = new List<PersonalTrainer>();
            indicePersonalTrainer = 0;  

            planos.Add(CriarPlanoPlatina(DateTime.Now));
            planos.Add(CriarPlanoMestre(DateTime.Now));
        }


        private Planos CriarPlanoPlatina(DateTime dataInicio)
        {
            return new Planos(
                "Platina",
                110.90,
                dataInicio,
                12, 
                new List<string> { "Acesso ilimitado", "Treinos personalizados", "Acompanhamento diário" }
            );
        }

       
        private Planos CriarPlanoMestre(DateTime dataInicio)
        {
            return new Planos(
                "Mestre",
                239.90,
                dataInicio,
                12, 
                new List<string> { "Acesso ilimitado", "Treinos personalizados", "Consultoria de nutricionista", "Acompanhamento diário" }
            );
        }

  
        public void ExibirPlanosDisponiveis()
        {
            Console.WriteLine("Escolha um plano disponível:");
            for (int i = 0; i < planos.Count; i++)
            {
                Console.WriteLine($"{i + 1} - {planos[i].Nome}: R${planos[i].Preco} - Benefícios: {string.Join(", ", planos[i].Beneficios)}");
            }
        }

        public void ExibirPlanosComPersonalTrainer()
        {
            Console.Clear();
            Console.WriteLine("Planos com Personal Trainers Associados:");
            foreach (var aluno in alunos)
            {
                aluno.ExibirInformacoes();
                Console.WriteLine("------------------------------");
            }
        }

      
        public void AtribuirPlanoAAluno(Aluno aluno)
        {
            ExibirPlanosDisponiveis();

            int escolhaPlano;
            bool escolhaValida = false;

            while (!escolhaValida)
            {
                Console.Write("Escolha o número do plano para o aluno (1 para Platina ou 2 para Mestre): ");
                escolhaPlano = int.Parse(Console.ReadLine());

                if (escolhaPlano == 1 || escolhaPlano == 2)
                {
                    escolhaValida = true;
                    Planos planoEscolhido = planos[escolhaPlano - 1];
                    aluno.PlanoAtual = planoEscolhido;
                    Console.WriteLine($"Plano {planoEscolhido.Nome} atribuído ao aluno {aluno.Nome}.");
                    AtribuirPersonalTrainerAoAluno(aluno);
                }
                else
                {
                    Console.WriteLine("Escolha inválida. Por favor, selecione 1 para Platina ou 2 para Mestre.");
                }
            }
        }

       
        private void AtribuirPersonalTrainerAoAluno(Aluno aluno)
        {
            if (personalTrainers.Count > 0)
            {
                
                aluno.PersonalTrainer = personalTrainers[indicePersonalTrainer];
                Console.WriteLine($"Personal Trainer {aluno.PersonalTrainer.Nome} atribuído ao aluno {aluno.Nome}.");

     indicePersonalTrainer = (indicePersonalTrainer + 1) % personalTrainers.Count;
            }
            else
            {
                Console.WriteLine("Não há personal trainers cadastrados.");
            }
        }

        public void CadastrarAluno(Aluno aluno)
        {
            alunos.Add(aluno);
        }

    
        public void CadastrarPersonalTrainer(PersonalTrainer personalTrainer)
        {
            personalTrainers.Add(personalTrainer);
        }
    }
}