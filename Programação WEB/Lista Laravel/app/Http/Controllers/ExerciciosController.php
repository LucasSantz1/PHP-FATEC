<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function mostrarExer1(){
        return view("exer1");
    }

    public function calcularExer1(Request $request){
        $num1 = (float) $request->input("num1");
        $num2 = (float) $request->input("num2");

        return $num1 + $num2;
    }

    public function mostrarExer2(){
        return view("exer2");
    }

    public function calcularExer2(Request $request){
        $num1 = (float) $request->input("num1");
        $num2 = (float) $request->input("num2");

        return $num2 - $num1;
    }

    public function mostrarExer3(){
        return view("exer3");
    }

    public function calcularExer3(Request $request){
        $num1 = (float) $request->input("num1");
        $num2 = (float) $request->input("num2");

        return $num2 * $num1;
    }

    public function mostrarExer4(){
        return view("exer4");
    }

    public function calcularExer4(Request $request){
        $num1 = (float) $request->input("num1");
        $num2 = (float) $request->input("num2");

        if ($num2 == 0) {
            return response('Erro: Não é possível dividir por zero.', 400);
        }

        return $num1 / $num2;
    }

    public function mostrarExer5(){
        return view("exer5");
    }

    public function calcularExer5(Request $request){
        $num1 = (float) $request->input("num1");
        $num2 = (float) $request->input("num2");
        $num3 = (float) $request->input("num3");

        $soma = $num1 + $num2 + $num3;
        $media = $soma / 3;

        return $media;
    }

    public function mostrarExer6(){
        return view("exer6");
    }

    public function calcularExer6(Request $request){
        $ce = (float) $request->input("ce");
        $fa = ($ce * 9/5) + 32;

        return $fa;
    }

    public function mostrarExer7(){
        return view("exer7");
    }

    public function calcularExer7(Request $request){
        $fa = (float) $request->input("fa");
        $ce = ($fa - 32) * 5 / 9;

        return $ce;
    }

    public function mostrarExer8(){
        return view("exer8");
    }

    public function calcularExer8(Request $request){
        $lar = (float) $request->input("lar");
        $alt = (float) $request->input("alt");

        $area = $lar * $alt;

        return $area;
    }

    public function mostrarExer9(){
        return view("exer9");
    }

    public function calcularExer9(Request $request){
        $raio = (float) $request->input("raio");
        $pi = M_PI;

        return pow($raio, 2) * $pi;
    }

    public function mostrarExer10(){
        return view("exer10");
    }

    public function calcularExer10(Request $request){
        $lar = (float) $request->input("lar");
        $alt = (float) $request->input("alt");

        $perimetro = 2 * ($lar + $alt);

        return $perimetro;
    }

    public function mostrarExer11(){
        return view("exer11");
    }

    public function calcularExer11(Request $request){
        $raio = (float) $request->input("raio");
        $pi = M_PI;

        return 2 * $pi * $raio;
    }

    public function mostrarExer12(){
        return view("exer12");
    }

    public function calcularExer12(Request $request){
        $base = (int) $request->input("base");
        $exp = (int) $request->input("exp");

        return pow($base, $exp);
    }

    public function mostrarExer13(){
        return view("exer13");
    }

    public function calcularExer13(Request $request){
        $metro = (float) $request->input("metro");

        return $metro * 100;
    }

    public function mostrarExer14(){
        return view("exer14");
    }

    public function calcularExer14(Request $request){
        $km = (float) $request->input("km");
        $milhas = $km * 0.621371;

        return $milhas;
    }

    public function mostrarExer15(){
        return view("exer15");
    }

    public function calcularExer15(Request $request){
        $peso = (float) $request->input("peso");
        $altura = (float) $request->input("altura");

        if ($altura == 0) {
            return 'Erro: Altura não pode ser zero.';
        }

        $imc = $peso / ($altura * $altura);

        return $imc;
    }

    public function mostrarExer16(){
        return view("exer16");
    }

    public function calcularExer16(Request $request){
        $preco = (float) $request->input("preco");
        $percent = (float) $request->input("percent");

        $desconto = $preco * ($percent / 100);
        $preco_atual = $preco - $desconto;

        return number_format($preco_atual, 2, ',', '.');
    }

    public function mostrarExer17(){
        return view("exer17");
    }

    public function calcularExer17(Request $request){
        $capital = (float) $request->input("capital");
        $taxa = (float) $request->input("taxa");
        $periodo = (float) $request->input("periodo");

        $juros_simples = $capital * ($taxa / 100) * $periodo;

        return 'O juros simples corresponde a ' . $juros_simples;
    }

    public function mostrarExer18(){
        return view("exer18");
    }

    public function calcularExer18(Request $request){
        $capital = (float) $request->input("capital");
        $taxa = (float) $request->input("taxa");
        $periodo = (float) $request->input("periodo");

        $montante = $capital * pow((1 + $taxa / 100), $periodo);

        return 'O montante com juros compostos corresponde a ' . $montante;
    }

    public function mostrarExer19(){
        return view("exer19");
    }

    public function calcularExer19(Request $request){
        $dias = (int) $request->input("dias");
        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;

        return "Dias: $dias, Horas: $horas, Minutos: $minutos, Segundos: $segundos";
    }

    public function mostrarExer20(){
        return view("exer20");
    }

    public function calcularExer20(Request $request){
        $dist = (float) $request->input("dist");
        $tempo = (float) $request->input("tempo");

        if ($tempo > 0) {
            $velocidade_media = $dist / $tempo;
            return "A velocidade média é de " . $velocidade_media . " unidades de distância por unidade de tempo.";
        } else {
            return "O tempo deve ser maior que zero.";
        }
    }
}
