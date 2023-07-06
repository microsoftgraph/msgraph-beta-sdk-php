<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ZebraFotaDeployment extends Entity implements Parsable 
{
    /**
     * Instantiates a new ZebraFotaDeployment and sets the default values.
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
        $val = $this->getBackingStore()->get('deploymentAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidFotaDeploymentAssignment::class);
            /** @var array<AndroidFotaDeploymentAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentAssignments'");
    }

    /**
     * Gets the deploymentSettings property value. The Zebra FOTA deployment complex type that describes the settings required to create a FOTA deployment.
     * @return ZebraFotaDeploymentSettings|null
    */
    public function getDeploymentSettings(): ?ZebraFotaDeploymentSettings {
        $val = $this->getBackingStore()->get('deploymentSettings');
        if (is_null($val) || $val instanceof ZebraFotaDeploymentSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentSettings'");
    }

    /**
     * Gets the deploymentStatus property value. Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
     * @return ZebraFotaDeploymentStatus|null
    */
    public function getDeploymentStatus(): ?ZebraFotaDeploymentStatus {
        $val = $this->getBackingStore()->get('deploymentStatus');
        if (is_null($val) || $val instanceof ZebraFotaDeploymentStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentStatus'");
    }

    /**
     * Gets the description property value. A human readable description of the deployment.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. A human readable name of the deployment.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deploymentAssignments' => fn(ParseNode $n) => $o->setDeploymentAssignments($n->getCollectionOfObjectValues([AndroidFotaDeploymentAssignment::class, 'createFromDiscriminatorValue'])),
            'deploymentSettings' => fn(ParseNode $n) => $o->setDeploymentSettings($n->getObjectValue([ZebraFotaDeploymentSettings::class, 'createFromDiscriminatorValue'])),
            'deploymentStatus' => fn(ParseNode $n) => $o->setDeploymentStatus($n->getObjectValue([ZebraFotaDeploymentStatus::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
        ]);
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
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
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
    }

    /**
     * Sets the deploymentAssignments property value. Collection of Android FOTA Assignment
     * @param array<AndroidFotaDeploymentAssignment>|null $value Value to set for the deploymentAssignments property.
    */
    public function setDeploymentAssignments(?array $value): void {
        $this->getBackingStore()->set('deploymentAssignments', $value);
    }

    /**
     * Sets the deploymentSettings property value. The Zebra FOTA deployment complex type that describes the settings required to create a FOTA deployment.
     * @param ZebraFotaDeploymentSettings|null $value Value to set for the deploymentSettings property.
    */
    public function setDeploymentSettings(?ZebraFotaDeploymentSettings $value): void {
        $this->getBackingStore()->set('deploymentSettings', $value);
    }

    /**
     * Sets the deploymentStatus property value. Represents the deployment status from Zebra. The status is a high level status of the deployment as opposed being a detailed status per device.
     * @param ZebraFotaDeploymentStatus|null $value Value to set for the deploymentStatus property.
    */
    public function setDeploymentStatus(?ZebraFotaDeploymentStatus $value): void {
        $this->getBackingStore()->set('deploymentStatus', $value);
    }

    /**
     * Sets the description property value. A human readable description of the deployment.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. A human readable name of the deployment.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

}
