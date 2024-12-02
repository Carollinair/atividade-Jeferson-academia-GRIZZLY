using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using static projetogym.Exercícios;

namespace projetogym
{
    internal class ConfigurarTreino
    {
        private void ConfigurarTreinos()
        {
            Console.Clear();
            Console.WriteLine("Configurar Treino");

            
            Musculacao musculacao = new Musculacao();

            
            musculacao.ExibirTreinos();

            Console.WriteLine("Treino configurado com sucesso!");
            Console.ReadLine();
        }
    }
}
