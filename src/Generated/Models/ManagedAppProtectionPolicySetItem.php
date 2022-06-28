<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppProtectionPolicySetItem extends PolicySetItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $targetedAppManagementLevels TargetedAppManagementLevels of the ManagedAppPolicySetItem.
    */
    private ?string $targetedAppManagementLevels = null;
    
    /**
     * Instantiates a new ManagedAppProtectionPolicySetItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppProtectionPolicySetItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppProtectionPolicySetItem {
        return new ManagedAppProtectionPolicySetItem();
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
            'targetedAppManagementLevels' => function (ParseNode $n) use ($o) { $o->setTargetedAppManagementLevels($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the targetedAppManagementLevels property value. TargetedAppManagementLevels of the ManagedAppPolicySetItem.
     * @return string|null
    */
    public function getTargetedAppManagementLevels(): ?string {
        return $this->targetedAppManagementLevels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetedAppManagementLevels', $this->targetedAppManagementLevels);
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
     * Sets the targetedAppManagementLevels property value. TargetedAppManagementLevels of the ManagedAppPolicySetItem.
     *  @param string|null $value Value to set for the targetedAppManagementLevels property.
    */
    public function setTargetedAppManagementLevels(?string $value ): void {
        $this->targetedAppManagementLevels = $value;
    }

}
