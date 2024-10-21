class Quest < ApplicationRecord
    has_many :steps, dependent: :destroy
    validates :name, presence: true
    validates :description, presence: true
  end
  