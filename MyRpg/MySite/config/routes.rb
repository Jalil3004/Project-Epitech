Rails.application.routes.draw do
  devise_for :users
  resources :quests do
    resources :steps, only: [:index, :show, :new, :edit, :create, :update, :destroy]
  end

  get 'welcome' => 'pages#home'
end
