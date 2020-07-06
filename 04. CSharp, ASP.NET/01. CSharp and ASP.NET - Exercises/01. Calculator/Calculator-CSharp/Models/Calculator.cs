using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Calculator_CSharp.Models
{
    public class Calculator
    {
        public decimal LeftOperand { get; set; }
        public decimal RightOperand { get; set; }
        public char Operator { get; set; }
        public decimal Result { get; set; }
        public Calculator()
        {
            this.Result = 0;
        }
        public Calculator(decimal leftOperand, decimal rightOperand, char calcOperator, decimal result)
        {
            this.LeftOperand = leftOperand;
            this.RightOperand = rightOperand;
            this.Operator = calcOperator;
            this.Result = result;
        }
    }
}