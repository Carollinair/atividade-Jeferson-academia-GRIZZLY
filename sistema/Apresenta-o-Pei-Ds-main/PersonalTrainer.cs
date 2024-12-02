using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace projetogym
{
    internal class PersonalTrainer
    {
        public string Nome { get; set; }
        public string Especialidade { get; set; }
        public string RG { get; set; }
        public string CPF { get; set; } 

        public PersonalTrainer(string nome, string especialidade, string rg, string cpf)
        {
            Nome = nome;
            Especialidade = especialidade;
            RG = rg;
            CPF = cpf;
        }

    }
}

