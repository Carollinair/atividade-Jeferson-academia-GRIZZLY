using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace projetogym
{
    internal class NotaFiscal
    {
        public int NumeroNota { get; set; }
        public Aluno Cliente { get; set; }
        public double ValorTotal { get; set; }
        public DateTime DataEmissao { get; set; }

        public NotaFiscal(int numeroNota, Aluno cliente, double valorTotal)
        {
            NumeroNota = numeroNota;
            Cliente = cliente;
            ValorTotal = valorTotal;
            DataEmissao = DateTime.Now;  
        }


        public void ExibirNotaFiscal()
        {
            Console.Clear();
            Console.WriteLine("Nota Fiscal Eletrônica");
            Console.WriteLine($"Número da Nota: {NumeroNota}");
            Console.WriteLine($"Cliente: {Cliente.Nome}");
            Console.WriteLine($"Data de Emissão: {DataEmissao}");
            
            
                
            
            Console.WriteLine($"\nValor Total: R${ValorTotal}");
            Console.WriteLine("\nObrigado por utilizar nossos serviços!");
            Console.ReadKey();
        }
    }
}

