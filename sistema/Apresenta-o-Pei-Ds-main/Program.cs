using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using static projetogym.Exercícios;

namespace projetogym
{
    internal class Program
    {

        static void Main(string[] args)
        {
            Menu menu = new Menu();
            menu.ExibirMenu();
        }
    }

    internal class Menu
    {
        private Cadastro cadastro;
        private GestãoPlanos gestaoPlanos;
        private Musculacao musculacao;

        public Menu()
        {
            cadastro = new Cadastro();
            gestaoPlanos = new GestãoPlanos();
            musculacao = new Musculacao();
        }

        public void ExibirMenu()
        {
            int opcao;
            do
            {
                Console.Clear();
                Console.WriteLine("Sistema de Academia");
                Console.WriteLine("1 - Cadastrar Aluno");
                Console.WriteLine("2 - Cadastrar Personal Trainer");
                Console.WriteLine("3 - Emitir Nota Fiscal");
                Console.WriteLine("4 - Gestão de Planos");
                Console.WriteLine("5 - Configurar Treino");
                Console.WriteLine("6 - Exibir Planos e Personal Trainers");
                Console.WriteLine("0 - Sair");
                Console.Write("Escolha uma opção: ");
                opcao = int.Parse(Console.ReadLine());

                switch (opcao)
                {
                    case 1:
                        CadastrarAluno();
                        break;
                    case 2:
                        CadastrarPersonalTrainer();
                        break;
                    case 3:
                        EmitirNotaFiscal();
                        break;
                    case 4:
                        GestaoDePlanos();
                        break;
                    case 5:
                        ConfigurarTreino();
                        break;
                    case 6:
                        ExibirPlanosComPersonalTrainer(gestaoPlanos.Alunos);
                        break;
                    case 0:
                        Console.WriteLine("Saindo...");
                        break;
                    default:
                        Console.WriteLine("Opção inválida! Tente novamente.");
                        break;
                }
            } while (opcao != 0);
        }

       

        private void CadastrarAluno()
        {
            Console.Clear();
            Console.WriteLine("Digite o nome do aluno: ");
            string nome = Console.ReadLine();
            Console.WriteLine("Digite o email do aluno: ");
            string email = Console.ReadLine();
            Console.WriteLine("Digite o RG do aluno: ");
            string rg = Console.ReadLine();
            Console.WriteLine("Digite o CPF do aluno: ");
            string cpf = Console.ReadLine();
            Console.WriteLine("Digite o telefone do aluno:");
            int telefone = int.Parse(Console.ReadLine());
            Console.WriteLine("Digite a matricula do aluno");
            int matricula = int.Parse(Console.ReadLine());

            Aluno novoAluno = new Aluno(nome, email, rg, cpf, telefone, matricula);

            cadastro.CadastrarAluno(novoAluno);
            gestaoPlanos.AtribuirPlanoAAluno(novoAluno);

            Console.ReadKey();
        }

        private void CadastrarPersonalTrainer()
        {
            Console.Clear();
            Console.WriteLine("Digite o nome do Personal: ");
            string nome = Console.ReadLine();
            Console.WriteLine("Digite a especialidade do Personal: ");
            string especialidade = Console.ReadLine();
            Console.WriteLine("Digite o RG do Personal: ");
            string rg = Console.ReadLine();
            Console.WriteLine("Digite o CPF do Personal: ");
            string cpf = Console.ReadLine();

            PersonalTrainer novoPersonal = new PersonalTrainer(nome, especialidade, rg, cpf);
            gestaoPlanos.CadastrarPersonalTrainer(novoPersonal); 
        }

        public void EmitirNotaFiscal()
        {
            Console.Clear();
            Console.WriteLine("Emitindo Nova Nota Fiscal");

           
            Console.Write("Digite o nome do aluno: ");
            string nome = Console.ReadLine();

            Console.Write("Digite o email do aluno: ");
            string email = Console.ReadLine();

            Console.Write("Digite o CPF do aluno: ");
            string cpf = Console.ReadLine();

            Console.Write("Digite o RG do aluno: ");
            string rg = Console.ReadLine();

            Console.Write("Digite o telefone do aluno: ");
            int telefone = int.Parse(Console.ReadLine());

            Console.Write("Digite o código do aluno: ");
            int codigoAluno = int.Parse(Console.ReadLine());

            
            Aluno aluno = new Aluno(nome, email, cpf, rg, telefone, codigoAluno);

         
            Console.Write("Digite o valor total da nota fiscal: R$ ");
            double valorTotal = double.Parse(Console.ReadLine());

            Random random = new Random();
            int numeroNota = random.Next(1000, 9999);

            NotaFiscal notaFiscal = new NotaFiscal(numeroNota, aluno, valorTotal);

            
            notaFiscal.ExibirNotaFiscal();
        }

        private void GestaoDePlanos()
        {
            Console.Clear();
            Console.WriteLine("Gestão de Planos");
            Console.WriteLine("1 - Atribuir plano a aluno");
            Console.WriteLine("2 - Renovar plano");
            Console.WriteLine("3 - Verificar vencimentos");
            Console.WriteLine("0 - Voltar");

            string opcao = Console.ReadLine();

            switch (opcao)
            {
                case "1":
                    AtribuirPlanoAluno();
                    break;
                case "2":
                    RenovarPlano();
                    break;
                case "3":
                    VerificarVencimentos();
                    break;
                case "0":
                    Voltar();
                    break;
                default:
                    Console.WriteLine("Opção inválida. Tente novamente.");
                    Console.ReadLine();
                    GestaoDePlanos();
                    break;
            }
        }

        private void AtribuirPlanoAluno()
        {
            Console.Clear();
            Console.WriteLine("Atribuir plano a aluno");

            Console.Write("Digite o nome do aluno: ");
            string nomeAluno = Console.ReadLine();

            Console.WriteLine("Escolha o plano:");
            Console.WriteLine("1 - Plano Platina");
            Console.WriteLine("2 - Plano Mestre");

            int planoEscolhido = 0;

            bool escolhaValida = false;
            while (!escolhaValida)
            {
                Console.Write("Digite o número do plano (1 para Platina, 2 para Mestre): ");
                string entrada = Console.ReadLine();

                if (int.TryParse(entrada, out planoEscolhido) && (planoEscolhido == 1 || planoEscolhido == 2))
                {
                    escolhaValida = true;
                }
                else
                {
                    Console.WriteLine("Escolha inválida. Por favor, insira 1 ou 2.");
                }
            }

            string nomePlano = planoEscolhido == 1 ? "Platina" : "Mestre";
            Console.WriteLine($"Plano {nomePlano} atribuído ao aluno {nomeAluno} com sucesso!");
            Console.ReadLine();

            GestaoDePlanos();
        }

        private void RenovarPlano()
        {
            Console.Clear();
            Console.WriteLine("Renovar plano");

            Console.Write("Digite o nome do aluno: ");
            string nomeAluno = Console.ReadLine();

            Console.WriteLine($"O plano do aluno {nomeAluno} foi renovado com sucesso!");

            Console.Write("Digite a nova data de validade (formato: dd/mm/aaaa): ");
            string novaDataValidade = Console.ReadLine();

            Console.WriteLine($"Plano renovado até {novaDataValidade}.");
            Console.ReadLine();
            GestaoDePlanos();
        }

        private void VerificarVencimentos()
        {
            Console.Clear();
            Console.WriteLine("Verificar vencimentos");

            Console.Write("Digite o nome do aluno: ");
            string nomeAluno = Console.ReadLine();

            Console.ReadLine();
            GestaoDePlanos();
        }

        private void Voltar()
        {
            Console.Clear();
            Console.WriteLine("Voltando ao menu anterior...");
            Console.ReadLine();
        }


        private void ConfigurarTreino()
        {
            Console.Clear();
            Console.WriteLine("Configurar Treino");


            musculacao.ExibirTreinos();

            Console.WriteLine("Treino configurado com sucesso!");
            Console.ReadLine();
        }

        public void ExibirPlanosComPersonalTrainer(List<Aluno> alunos)
        {
            Console.Clear();
            Console.WriteLine("Planos com Personal Trainers Associados:");

            if (alunos.Count > 0)
            {
                foreach (var aluno in alunos)
                {
                    
                    Console.WriteLine($"Aluno: {aluno.Nome}");

                    if (aluno.PlanoAtual != null)
                    {
                        Console.WriteLine($"Plano: {aluno.PlanoAtual.Nome} - R${aluno.PlanoAtual.Preco}");
                        Console.WriteLine($"Data de Início: {aluno.PlanoAtual.DataInicio.ToShortDateString()}");
                        Console.WriteLine($"Data de Vencimento: {aluno.PlanoAtual.DataVencimento.ToShortDateString()}");

                        if (aluno.PersonalTrainer != null)
                        {
                            Console.WriteLine($"Personal Trainer: {aluno.PersonalTrainer.Nome}");
                        }
                        else
                        {
                            Console.WriteLine("Personal Trainer: Não atribuído");
                        }
                    }
                    else
                    {
                        Console.WriteLine("Plano: Não atribuído");
                    }
                    Console.WriteLine("------------------------------");
                }
            }
            else
            {
                Console.WriteLine("Não há alunos cadastrados.");
            }

            Console.WriteLine("Pressione qualquer tecla para continuar...");
            Console.ReadKey();
        }
    }
    }
