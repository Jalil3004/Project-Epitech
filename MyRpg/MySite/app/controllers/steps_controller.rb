class StepsController < ApplicationController
  before_action :set_quest
  before_action :set_step, only: [:show, :edit, :update, :destroy]

  def index
    @steps = @quest.steps
  end

  def show
  end

  def new
    @step = @quest.steps.build
  end

  def edit
  end

  def create
    @step = @quest.steps.build(step_params)

    if @step.save
      redirect_to quest_step_path(@quest, @step), notice: 'Step was successfully created.'
    else
      render :new
    end
  end

  def update
    if @step.update(step_params)
      redirect_to quest_step_path(@quest, @step), notice: 'Step was successfully updated.'
    else
      render :edit
    end
  end

  def destroy
    @step.destroy
    redirect_to quest_steps_path(@quest), notice: 'Step was successfully destroyed.'
  end

  private

  def set_quest
    @quest = Quest.find(params[:quest_id])
  end

  def set_step
    @step = @quest.steps.find(params[:id])
  end

  def step_params
    params.require(:step).permit(:description, :order)
  end
end
