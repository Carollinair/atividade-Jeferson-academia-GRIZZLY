using System;
using System.Collections.Generic;
using System.Linq;
using System.Numerics;
using System.Text;
using System.Threading.Tasks;

namespace projetogym
{
   internal class Aluno
{
    public string Nome { get; set; }
    public string Email { get; set; }
    public string RG { get; set; }

    public Planos PlanoAtual { get; set; }
    public string CPF { get; set; }
    public int Telefone { get; set; }
    public int Matricula { get; set; }
    public bool TemProblemaSaude { get; set; }
    public string RecomendacaoMedica { get; set; }
    public PersonalTrainer PersonalTrainer { get; set; } 

    public Aluno(string nome, string email, string rg, string cpf, int telefone, int matricula)
    {
        Nome = nome;
        Email = email;
        RG = rg;
        CPF = cpf;
        Telefone = telefone;
        Matricula = matricula;
    }


        public void AtribuirPlano(Planos plano)
        {
            PlanoAtual = plano;
        }

        public void ExibirInformacoes()
        {
            Console.WriteLine($"Nome: {Nome}");
            Console.WriteLine($"Email: {Email}");
            Console.WriteLine($"Matricula: {Matricula}");
            Console.WriteLine($"Plano: {PlanoAtual?.Nome ?? "Nenhum"}");
            Console.WriteLine($"Personal Trainer: {PersonalTrainer?.Nome ?? "Nenhum"}");
           
            
            if (PersonalTrainer != null)
                Console.WriteLine($"Personal Trainer: {PersonalTrainer.Nome} - Especialidade: {PersonalTrainer.Especialidade}");
            if (PlanoAtual != null)
                Console.WriteLine($"Plano: {PlanoAtual.Nome} - Vence em: {PlanoAtual.DataVencimento.ToShortDateString()}");

            Console.WriteLine($"Tem problema de saúde: {(TemProblemaSaude ? "Sim" : "Não")}");
            if (TemProblemaSaude && !string.IsNullOrEmpty(RecomendacaoMedica))
            {
                Console.WriteLine($"Recomendação médica: {RecomendacaoMedica}");
            }
            else if (TemProblemaSaude)
            {
                Console.WriteLine("Recomendação médica: Nenhuma recomendação fornecida.");
            }
        }

        public void PerguntarSobreSaude()
        {
            Console.Write("Você tem algum problema de saúde? (Sim/Não): ");
            string respostaSaude = Console.ReadLine().ToLower();

            if (respostaSaude == "sim")
            {
                TemProblemaSaude = true;
                Console.Write("Por favor, forneça uma recomendação médica: ");
                RecomendacaoMedica = Console.ReadLine();
            }
            else
            {
                TemProblemaSaude = false;
                RecomendacaoMedica = string.Empty;
            }
             
        }
    }
    }

   