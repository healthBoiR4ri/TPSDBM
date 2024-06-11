<?php
class Couleur extends Model
{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "couleur";

        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    /**
     * Met à jour le nom d'une couleur à partir de son ID
     *
     * @param int $id
     * @param string $slug
     * @return void
     */
    public function update(int $id, string $nom)
    {
        $sql = "UPDATE " . $this->table . " set NOM_COULEUR=:p_nom WHERE ID_COULEUR=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT);
        $query->bindParam(':p_nom', $nom,  PDO::PARAM_STR);
        $query->execute();
    }

    /**
     * Supprime une couleur à partir de son ID
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE ID_COULEUR=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * Ajoute une couleur 
     *
     * @param string $nom
     * @return void
     */
    public function insert(string $nom)
    {
        $sql = "INSERT INTO " . $this->table . " (NOM_COULEUR) VALUES (:p_nom)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_nom', $nom,  PDO::PARAM_STR);
        $query->execute();
    }
}
