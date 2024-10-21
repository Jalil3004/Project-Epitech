# app/models/user.rb

class User < ApplicationRecord
  # Include default devise modules. Others available are:
  # :confirmable, :lockable, :timeoutable, :trackable and :omniauthable
  devise :database_authenticatable, :registerable,
         :recoverable, :rememberable, :validatable
  # Autres associations, validations, etc.

  # Ajoutez cette ligne pour définir les rôles autorisés
  enum role: { player: "player", master: "master" }

  # Ajoutez cette ligne pour valider la présence du rôle lors de la création d'un utilisateur
  validates :role, presence: true
end
