<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDeploymentSettings extends DeploymentSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var UserExperienceSettings|null $userExperience Settings governing the user's update experience on a device.
    */
    private ?UserExperienceSettings $userExperience = null;
    
    /**
     * Instantiates a new WindowsDeploymentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userExperience' => function (ParseNode $n) use ($o) { $o->setUserExperience($n->getObjectValue(array(UserExperienceSettings::class, 'createFromDiscriminatorValue'))); },
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the userExperience property value. Settings governing the user's update experience on a device.
     *  @param UserExperienceSettings|null $value Value to set for the userExperience property.
    */
    public function setUserExperience(?UserExperienceSettings $value ): void {
        $this->userExperience = $value;
    }

}
