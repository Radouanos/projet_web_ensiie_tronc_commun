<?php


namespace Clients;

class ClientsRepository
{
    private $connection;
    public function __construct(\PDO $connection)
    {
        $this->connection=$connection;
    }
    public function add(Clients $client)
    {
        $prep=$this->connection->prepare('INSERT INTO clients (ncompte,nom,prenom,date_naissance,adresse,cp,pays) VALUES (:ncompte,:nom,:prenom,:date_naissance,:adresse,:cp,:pays)');
        $prep->bindValue(':ncompte',$client->getNCompte(),PDO::PARAM_INT);
        $prep->bindValue(':nom',$client->getNom());
        $prep->bindValue(':prenom',$client->getPrenom());
        $prep->bindValue(':date_naissance',$client->getDateNaissance());
        $prep->bindValue(':adresse',$client->getAdresse());
        $prep->bindValue(':cp',$client->getCp());
        $prep->bindValue(':pays',$client->getPays());
        $prep->execute();
    }
    public function delete(Clients $client)
    {
        $this->connection->exec('delete from clients where ncompte='.$client->getNCompte());
    }
    public function update(Clients $client)
    {
        $req=$this->connection->prepare('UPDATE clients SET nom = :nom,prenom = :prenom, datenaissance = :datenaissance , adresse = :adresse , cp = :cp ,pays = :pays WHERE ncompte = :ncompte');
        $req->bindValue(':nom', $client->getNom());

        $req->bindValue(':prenom', $client->getPrenom());
        $req->bindValue(':datenaissance', $client->getDatenaissance());
        $req->bindValue(':adresse',$client->getAdresse());
        $req->bindValue(':cp',$client->getCp(),PDO::PARAM_INT);
        $req->bindValue(':pays',$client->getPays());
        $req->bindValue(':ncompte',$client->getNcompte(),PDO::PARAM_INT);

        $req->execute();
    }
    public function allClient()
    {
        $clients=[];
        $req=$this->connection->query('select ncompte,nom,prenom,date_naissance,adresse,cp,pays from clients order by ncompte');
        while($clt=$req->fetch(PDO::FETCH_ASSOC))
        {
            $clients[]=new Clients($clt);
        }
        return $clients;
    }
    public function getCompte($ncompte)
    {
        $id = (int) $ncompte;
        $req = $this->connection->query('SELECT ncompte,nom,prenom,date_naissance,adresse,cp,pays FROM clients WHERE ncompte = '.$id);
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        return new Clients($donnees);
}
}