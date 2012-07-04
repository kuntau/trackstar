<?php
class ProjectTest extends CDbTestCase
{
    public $fixtures=array
        (
            'projects'=>'Project',
        );
    public function testCreate()
    {
        //create a new project
        $newProject = new Project;
        $newProjectName = 'Test Project Creation';
        $newProject->setAttributes(
            array(
                'name' => $newProjectName,
                'description' => 'This is a test for new project creation',
                'create_time' => '2012-03-07 00:00:00',
                'create_user_id' => 1,
                'update_time' => '2012-03-07 00:00:00',
                'update_user_id' => 1,
            )
        );
        $this->assertTrue($newProject->save(false));

        //READ back the newly created project
        $retrievedProject=Project::model()->findByPk($newProject->id);
        $this->assertTrue($retrievedProject instanceof Project);
        $this->assertEquals($newProjectName, $retrievedProject->name);
    }
    public function testRead()
    {
        $retrievedProject = $this->projects('project1');
        $this->assertTrue($retrievedProject instanceof Project);
        $this->assertEquals('Test Project 1', $retrievedProject->name);
    }
    public function testUpdate()
    {
        //UPDATE the newly created project
        $project = $this->projects('project3');
        $updatedProjectName = 'Updated Test Project 2';
        $project->name = $updatedProjectName;
        $this->assertTrue($project->save(false));

        //READ back the record again to ensure the update worked
        $updatedProject = Project::model()->findByPk($project->id);
        $this->assertTrue($updatedProject instanceof Project);
        $this->assertEquals($updatedProjectName, $updatedProject->name);
    }
    public function testDelete()
    {
        //DELETE the project
        $project = $this->projects('project2');
        $SavedProjectId = $project->id;
        $this->assertTrue($project->delete());
        $deletedProject = Project::model()->findByPk($SavedProjectId);
        $this->assertEquals(NULL,$deletedProject);
    }
}
?>
