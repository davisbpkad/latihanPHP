<?php

// parent class
abstract class Hewan implements IHewan, IMakhlukHidup
{
  public function __construct(
    public string $nama,
    protected string $jenis,
    public int $jumlahKaki
  ) {}

  public function bernafas()
  {
    echo "Bernafas";
  }
}

interface IHewan
{
  public function jalan();
}

interface IMakhlukHidup
{
  public function bernafas();
}

trait BisaBerenang
{
  public string $jenisAir = 'air tawar';

  public function berenang()
  {
    echo "Kecipak kecipak";
  }
}

trait BisaTerbang
{
  public string $jenisSayap = 'sayap bersisik';

  public function terbang()
  {
    echo "Terbang aja";
  }
}

// child class
class Unggas extends Hewan
{
  // trait
  use BisaBerenang, BisaTerbang;

  // overriding
  public function __construct(public string $nama, public string $bentukParuh)
  {
    // $this->jenis = 'Unggas';
    // $this->jumlahKaki = 2;

    parent::__construct($nama, 'Unggas', 2);
  }

  public function jalan()
  {
    echo "Jalan pakai 2 kaki";
  }
}

class Mamalia extends Hewan
{
  public function __construct(public string $nama, public int $jumlahKaki = 4)
  {
    parent::__construct($nama, 'Mamalia', $jumlahKaki);
  }

  public function jalan()
  {
    echo "Jalan pakai $this->jumlahKaki kaki";
  }
}

// $burung = new Hewan('Burung', 'Unggas', 2);
// echo $burung->nama . "\n";
// echo $burung->jenis . "\n";
// echo $burung->jumlahKaki . "\n";
// $burung->jalan();

$burung = new Unggas('Burung', 'lancip');
// // print_r($burung);
$burung->jalan();
$burung->berenang();
$burung->terbang();
