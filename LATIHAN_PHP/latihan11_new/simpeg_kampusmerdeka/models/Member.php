<?php
class Member
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor untuk koneksi database
    public function __construct()
    {
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    //member3 method2 CRUD
    public function dataMember()
    {
        $sql = "SELECT * FROM member ORDER BY id DESC";
        //$data_member = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getMember($id)
    {
        $sql = "SELECT * FROM member WHERE id = ?";
        $pd = $this->koneksi->prepare($sql);
        $pd->execute([$id]);
        $rs = $pd->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO member (fullname, email, username, password, role, foto) VALUES (?,?,?,SHA1(MD5(SHA1(?))),?,?)";
        $td = $this->koneksi->prepare($sql);
        // $td->execute($data);
        $td->var_dump($data);
    }

    public function ubah($data)
    {
        $sql = "UPDATE member SET fullname=?, email=?, username=?, password=SHA1(MD5(SHA1(?))), role=?, foto=? WHERE id=?";
        $td = $this->koneksi->prepare($sql);
        $td->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM member WHERE id=?";
        $td = $this->koneksi->prepare($sql);
        $td->execute([$id]);
    }

    public function cekLogin($data)
    {
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(SHA1(?)))";
        $pd = $this->koneksi->prepare($sql);
        $pd->execute($data);
        $rs = $pd->fetch();
        return $rs;
    }
}
