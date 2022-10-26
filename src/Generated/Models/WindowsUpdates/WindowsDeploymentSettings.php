<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDeploymentSettings extends DeploymentSettings implements Parsable 
{
    /**
     * @var UserExperienceSettings|null $userExperience Settings governing the user's update experience on a device.
    */
    private ?UserExperienceSettings $userExperience = null;
    
    /**
     * Instantiates a new WindowsDeploymentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.windowsDeploymentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDeploymentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDeploymentSettings {
        return new WindowsDeploymentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userExperience' => fn(ParseNode $n) => $o->setUserExperience($n->getObjectValue([UserExperienceSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userExperience property value. Settings governing the user's update experience on a device.
     * @return UserExperienceSettings|null
    */
    public function getUserExperience(): ?UserExperienceSettings {
        return $this->userExperience;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('userExperience', $this->userExperience);
    }

    /**
     * Sets the userExperience property value. Settings governing the user's update experience on a device.
     *  @param UserExperienceSettings|null $value Value to set for the userExperience property.
    */
    public function setUserExperience(?UserExperienceSettings $value ): void {
        $this->userExperience = $value;
    }

}
