using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace projetogym
{
    public class Planos
    {
        public string Nome { get; set; }
        public double Preco { get; set; }
        public DateTime DataInicio { get; set; }
        public DateTime DataVencimento { get; set; }
        public List<string> Beneficios { get; set; }

        // Construtor com todos os parâmetros necessários
        public Planos(string nome, double preco, DateTime dataInicio, int duracaoMeses, List<string> beneficios)
        {
            Nome = nome;
            Preco = preco;
            DataInicio = dataInicio;
            DataVencimento = dataInicio.AddMonths(duracaoMeses); // Calculando a data de vencimento com base na duração
            Beneficios = beneficios;
        }

        public bool EstaVencido()
        {
            return DateTime.Now > DataVencimento;
        }

        public bool ProximoVencimento()
        {
            return DateTime.Now.AddDays(30) >= DataVencimento;
        }

        public void Renovar(int duracaoMeses)
        {
            DataVencimento = DateTime.Now.AddMonths(duracaoMeses); // Renovando o plano
        }

        public override string ToString()
        {
            string beneficios = string.Join(", ", Beneficios);
            return $"{Nome} - R${Preco} - Vence em: {DataVencimento.ToShortDateString()} - Benefícios: {beneficios}";
        }
    }
}
