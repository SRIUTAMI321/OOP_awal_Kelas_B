<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {

  private $Nama;
  private $NIM;
  private $MataKuliah;
  private $dosenkiller;
  private $citacita;
  private $hobby;


  public function __construct($Nama, $NIM, $MataKuliah, $dosenkiller, $citacita,$hobby){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->MataKuliah = $MataKuliah;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
    $this->hobby = $hobby;
  }


  function get_Nama() {
    return $this->Nama;
  }
  function get_NIM(){
    return $this->NIM;
  }
  function get_MataKuliah(){
    return $this->MataKuliah;
  }
  function get_dosenkiller(){
    return $this->dosenkiller;
  }
    function get_citacita(){
    return $this->citacita;
  }
  function get_hobby(){
    return $this->hobby;
  }
}

class universitas extends mahasiswa {
  public function salam(){
    echo " Selamat Datang di Kampus Kami";
    }
}
$selviwidyarahmi = new universitas('selvi widya rahmi', '2255201030', 'PBO', 'lala', 'jadi orang kaya','renang');
echo $selviwidyarahmi->salam();
echo "<br>";
echo $selviwidyarahmi->get_Nama();
echo "<br>";
echo $selviwidyarahmi->get_NIM();
echo "<br>";
echo $selviwidyarahmi->get_MataKuliah();
echo "<br>";
echo $selviwidyarahmi->get_dosenkiller();
echo "<br>";
echo $selviwidyarahmi->get_citacita();
echo "<br>";
echo $selviwidyarahmi->get_hobby();
?>

</body>
</html>
