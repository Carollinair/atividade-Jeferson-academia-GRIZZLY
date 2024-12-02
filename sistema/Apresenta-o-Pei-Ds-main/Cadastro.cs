using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Threading.Tasks;

namespace projetogym
{
    internal class Cadastro
    {
       
        private List<Aluno> alunos;
        private List<PersonalTrainer> personalTrainers;
        private int indicePersonalTrainer; 

        public Cadastro()
        {
            alunos = new List<Aluno>();
            personalTrainers = new List<PersonalTrainer>();
            indicePersonalTrainer = 0; 
        }

        public void CadastrarAluno(string nome, string email, string rg, string cpf, int telefone, int matricula)
        {
            var aluno = new Aluno(nome, email, rg, cpf, telefone, matricula);
           

            Console.Write("O aluno tem problema de saúde? (s/n): ");
            string resposta = Console.ReadLine().ToLower();
            if (resposta == "s")
            {
                aluno.TemProblemaSaude = true;
                Console.Write("Digite a recomendação médica: ");
                aluno.RecomendacaoMedica = Console.ReadLine();
            }

            
            AtribuirPersonalTrainerAoAluno(aluno);

            AdicionarAluno(aluno);
            alunos.Add(aluno);
            Console.WriteLine($"Aluno {aluno.Nome} cadastrado com sucesso!");
        }

        public void CadastrarPersonalTrainer(string nome, string especialidade, string rg, string cpf)
        {
            var trainer = new PersonalTrainer(nome, especialidade, rg, cpf);
            personalTrainers.Add(trainer);
            Console.WriteLine("Personal Trainer cadastrado com sucesso!");
        }

       
        internal void AdicionarAluno(Aluno aluno)
        {
            if (alunos.Any(a => a.CPF == aluno.CPF || a.Matricula == aluno.Matricula))
            {
                Console.WriteLine("Aluno já cadastrado! Não é possível adicionar.");
            }
            else
            {
                alunos.Add(aluno);
                Console.WriteLine("Aluno cadastrado com sucesso!");
            }
        }

     
        private void AtribuirPersonalTrainerAoAluno(Aluno aluno)
        {
            if (personalTrainers.Count > 0)
            {
               
                aluno.PersonalTrainer = personalTrainers[indicePersonalTrainer];
                Console.WriteLine($"Aluno {aluno.Nome} atribuído ao Personal Trainer {aluno.PersonalTrainer.Nome}.");

               
                indicePersonalTrainer = (indicePersonalTrainer + 1) % personalTrainers.Count;
            }
            else
            {
                Console.WriteLine("Não há personal trainers cadastrados.");
            }
        }

        public List<Aluno> ObterAlunos()
        {
            return alunos;
        }

        public List<PersonalTrainer> ObterPersonalTrainers()
        {
            return personalTrainers;
        }

        internal void CadastrarAluno(Aluno novoAluno)
        {
            throw new NotImplementedException();
        }
    }
}

