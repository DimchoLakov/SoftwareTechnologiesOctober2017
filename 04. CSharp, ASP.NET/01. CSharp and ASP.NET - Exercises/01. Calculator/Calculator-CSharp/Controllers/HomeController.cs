using Calculator_CSharp.Models;
using System;
using System.Web.Mvc;

namespace Calculator_CSharp.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index(Calculator calculator)
        {
            return View(calculator);
        }
        
        [HttpPost]
        public ActionResult Calculate(Calculator calculator)
        {
            calculator.Result = CalculateResult(calculator);

            return RedirectToAction("Index", calculator);
        }

        private decimal CalculateResult(Calculator calculator)
        {
            decimal leftOperand = calculator.LeftOperand;
            decimal rightOperand = calculator.RightOperand;
            char op = calculator.Operator;
            decimal result = calculator.Result;

            switch (op)
            {
                case '+':
                    result = leftOperand + rightOperand;
                    break;
                case '-':
                    result = leftOperand - rightOperand;
                    break;
                case '*':
                    result = leftOperand * rightOperand;
                    break;
                case '/':
                    result = leftOperand / rightOperand;
                    break;
                case '^':
                    decimal powResult = 1;

                    for (int i = 0; i < rightOperand; i++)
                    {
                        powResult *= leftOperand;
                    }

                    result = powResult;
                    break;
                case '%':
                    result = leftOperand % rightOperand;
                    break;
            }

            return result;
        }
    }
}