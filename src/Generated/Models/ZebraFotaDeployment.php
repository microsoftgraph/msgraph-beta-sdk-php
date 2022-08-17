<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ZebraFotaDeployment extends Entity implements Parsable 
{
    /**
     * @var array<AndroidFotaDeploymentAssignment>|null $deploymentAssignments Collection of Android FOTA Assignment
    */
    private ?array $deploymentAssignments = null;
    
    /**
     * @var ZebraFotaDeploymentSettings|null $deploymentSettings The Zebra FOTA deployment complex type that describes the settings required to create a FOTA deployment.
    */
    private ?ZebraFotaDeploymentSettings $deploymentSettings = null;
    
    /**
     * @var ZebraFotaDeploymentStatus|null $deploymentStatus Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
    */
    private ?ZebraFotaDeploymentStatus $deploymentStatus = null;
    
    /**
     * @var string|null $description A human readable description of the deployment.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName A human readable name of the deployment.
    */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new ZebraFotaDeployment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.zebraFotaDeployment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ZebraFotaDeployment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ZebraFotaDeployment {
        return new ZebraFotaDeployment();
    }

    /**
     * Gets the deploymentAssignments property value. Collection of Android FOTA Assignment
     * @return array<AndroidFotaDeploymentAssignment>|null
    */
    public function getDeploymentAssignments(): ?array {
        return $this->deploymentAssignments;
    }

    /**
     * Gets the deploymentSettings property value. The Zebra FOTA deployment complex type that describes the settings required to create a FOTA deployment.
     * @return ZebraFotaDeploymentSettings|null
    */
    public function getDeploymentSettings(): ?ZebraFotaDeploymentSettings {
        return $this->deploymentSettings;
    }

    /**
     * Gets the deploymentStatus property value. Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
     * @return ZebraFotaDeploymentStatus|null
    */
    public function getDeploymentStatus(): ?ZebraFotaDeploymentStatus {
        return $this->deploymentStatus;
    }

    /**
     * Gets the description property value. A human readable description of the deployment.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. A human readable name of the deployment.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deploymentAssignments' => function (ParseNode $n) use ($o) { $o->setDeploymentAssignments($n->getCollectionOfObjectValues(array(AndroidFotaDeploymentAssignment::class, 'createFromDiscriminatorValue'))); },
            'deploymentSettings' => function (ParseNode $n) use ($o) { $o->setDeploymentSettings($n->getObjectValue(array(ZebraFotaDeploymentSettings::class, 'createFromDiscriminatorValue'))); },
            'deploymentStatus' => function (ParseNode $n) use ($o) { $o->setDeploymentStatus($n->getObjectValue(array(ZebraFotaDeploymentStatus::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deploymentAssignments', $this->deploymentAssignments);
        $writer->writeObjectValue('deploymentSettings', $this->deploymentSettings);
        $writer->writeObjectValue('deploymentStatus', $this->deploymentStatus);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the deploymentAssignments property value. Collection of Android FOTA Assignment
     *  @param array<AndroidFotaDeploymentAssignment>|null $value Value to set for the deploymentAssignments property.
    */
    public function setDeploymentAssignments(?array $value ): void {
        $this->deploymentAssignments = $value;
    }

    /**
     * Sets the deploymentSettings property value. The Zebra FOTA deployment complex type that describes the settings required to create a FOTA deployment.
     *  @param ZebraFotaDeploymentSettings|null $value Value to set for the deploymentSettings property.
    */
    public function setDeploymentSettings(?ZebraFotaDeploymentSettings $value ): void {
        $this->deploymentSettings = $value;
    }

    /**
     * Sets the deploymentStatus property value. Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
     *  @param ZebraFotaDeploymentStatus|null $value Value to set for the deploymentStatus property.
    */
    public function setDeploymentStatus(?ZebraFotaDeploymentStatus $value ): void {
        $this->deploymentStatus = $value;
    }

    /**
     * Sets the description property value. A human readable description of the deployment.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. A human readable name of the deployment.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
