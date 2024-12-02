using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace projetogym
{
    internal class Recibo
    {
        public int NumeroRecibo { get; set; }
        public Aluno Cliente { get; set; }
        public double ValorPago { get; set; }
        public DateTime DataPagamento { get; set; }

        public Recibo(int numeroRecibo, Aluno cliente, double valorPago)
        {
            NumeroRecibo = numeroRecibo;
            Cliente = cliente;
            ValorPago = valorPago;
            DataPagamento = DateTime.Now;
        }

        public void ExibirRecibo()
        {
            Console.Clear();
            Console.WriteLine("Recibo de Pagamento");
            Console.WriteLine($"Número do Recibo: {NumeroRecibo}");
            Console.WriteLine($"Cliente: {Cliente.Nome}");
            Console.WriteLine($"Data de Pagamento: {DataPagamento}");
            Console.WriteLine($"\nValor Pago: R${ValorPago}");
            Console.WriteLine("\nObrigado pelo pagamento!");
            Console.ReadKey();
        }
    }
}
