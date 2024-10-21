class Step < ApplicationRecord
  belongs_to :quest
  validates :description, presence: true
  validates :order, presence: true
end
