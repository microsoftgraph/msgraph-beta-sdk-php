<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetedManagedAppPolicyAssignment extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceAndAppManagementAssignmentSource|null $source Type of resource used for deployment to a group, direct or parcel/policySet. Possible values are: direct, policySets.
    */
    private ?DeviceAndAppManagementAssignmentSource $source = null;
    
    /**
     * @var string|null $sourceId Identifier for resource used for deployment to a group
    */
    private ?string $sourceId = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentTarget|null $target Identifier for deployment to a group or app
    */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new targetedManagedAppPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedManagedAppPolicyAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedManagedAppPolicyAssignment {
        return new TargetedManagedAppPolicyAssignment();
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
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getEnumValue(DeviceAndAppManagementAssignmentSource::class)); },
            'sourceId' => function (ParseNode $n) use ($o) { $o->setSourceId($n->getStringValue()); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the source property value. Type of resource used for deployment to a group, direct or parcel/policySet. Possible values are: direct, policySets.
     * @return DeviceAndAppManagementAssignmentSource|null
    */
    public function getSource(): ?DeviceAndAppManagementAssignmentSource {
        return $this->source;
    }

    /**
     * Gets the sourceId property value. Identifier for resource used for deployment to a group
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the target property value. Identifier for deployment to a group or app
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('source', $this->source);
        $writer->writeStringValue('sourceId', $this->sourceId);
        $writer->writeObjectValue('target', $this->target);
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
     * Sets the source property value. Type of resource used for deployment to a group, direct or parcel/policySet. Possible values are: direct, policySets.
     *  @param DeviceAndAppManagementAssignmentSource|null $value Value to set for the source property.
    */
    public function setSource(?DeviceAndAppManagementAssignmentSource $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the sourceId property value. Identifier for resource used for deployment to a group
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the target property value. Identifier for deployment to a group or app
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
