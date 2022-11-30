<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ZebraFotaDeployment extends Entity implements Parsable 
{
    /**
     * Instantiates a new zebraFotaDeployment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('deploymentAssignments');
    }

    /**
     * Gets the deploymentSettings property value. The Zebra FOTA deployment complex type that describes the settings required to create a FOTA deployment.
     * @return ZebraFotaDeploymentSettings|null
    */
    public function getDeploymentSettings(): ?ZebraFotaDeploymentSettings {
        return $this->getBackingStore()->get('deploymentSettings');
    }

    /**
     * Gets the deploymentStatus property value. Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
     * @return ZebraFotaDeploymentStatus|null
    */
    public function getDeploymentStatus(): ?ZebraFotaDeploymentStatus {
        return $this->getBackingStore()->get('deploymentStatus');
    }

    /**
     * Gets the description property value. A human readable description of the deployment.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. A human readable name of the deployment.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deploymentAssignments' => fn(ParseNode $n) => $o->setDeploymentAssignments($n->getCollectionOfObjectValues([AndroidFotaDeploymentAssignment::class, 'createFromDiscriminatorValue'])),
            'deploymentSettings' => fn(ParseNode $n) => $o->setDeploymentSettings($n->getObjectValue([ZebraFotaDeploymentSettings::class, 'createFromDiscriminatorValue'])),
            'deploymentStatus' => fn(ParseNode $n) => $o->setDeploymentStatus($n->getObjectValue([ZebraFotaDeploymentStatus::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deploymentAssignments', $this->getDeploymentAssignments());
        $writer->writeObjectValue('deploymentSettings', $this->getDeploymentSettings());
        $writer->writeObjectValue('deploymentStatus', $this->getDeploymentStatus());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the deploymentAssignments property value. Collection of Android FOTA Assignment
     *  @param array<AndroidFotaDeploymentAssignment>|null $value Value to set for the deploymentAssignments property.
    */
    public function setDeploymentAssignments(?array $value): void {
        $this->getBackingStore()->set('deploymentAssignments', $value);
    }

    /**
     * Sets the deploymentSettings property value. The Zebra FOTA deployment complex type that describes the settings required to create a FOTA deployment.
     *  @param ZebraFotaDeploymentSettings|null $value Value to set for the deploymentSettings property.
    */
    public function setDeploymentSettings(?ZebraFotaDeploymentSettings $value): void {
        $this->getBackingStore()->set('deploymentSettings', $value);
    }

    /**
     * Sets the deploymentStatus property value. Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
     *  @param ZebraFotaDeploymentStatus|null $value Value to set for the deploymentStatus property.
    */
    public function setDeploymentStatus(?ZebraFotaDeploymentStatus $value): void {
        $this->getBackingStore()->set('deploymentStatus', $value);
    }

    /**
     * Sets the description property value. A human readable description of the deployment.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. A human readable name of the deployment.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}
