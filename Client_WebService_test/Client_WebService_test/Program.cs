using Syn.Speech.Api;
using System;
using System.IO;
using System.Net;
using System.Threading;

namespace Client_WebService_test
{
    class Program
    {
        static void Main(string[] args)
        {
            /*StreamSpeechRecognizer speechRecognizer;
            Configuration speechConfiguration;

            speechConfiguration = new Configuration();
            speechConfiguration.AcousticModelPath = modelsDirectory;
            speechConfiguration.DictionaryPath = Path.Combine(modelsDirectory, "cmudict-fr-fr.dict");
            speechConfiguration.LanguageModelPath = Path.Combine(modelsDirectory, "fr-fr.lm.dmp");*/

            Uri uri = new Uri("http://172.20.10.2:8888/webService/general.php?phrase=quel+heure+est+t+il");
            WebRequest request = WebRequest.CreateHttp(uri);
            request.Method = "GET";    

            WebResponse response = request.GetResponse();

            StreamReader reader = new StreamReader(response.GetResponseStream());

            Console.WriteLine(reader.ReadToEnd());
            Thread.Sleep(5000);

            reader.Close();
            response.Close();
        }
    }
}
