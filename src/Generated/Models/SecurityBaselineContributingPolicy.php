<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityBaselineContributingPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Name of the policy
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $sourceId Unique identifier of the policy
    */
    private ?string $sourceId = null;
    
    /**
     * @var SecurityBaselinePolicySourceType|null $sourceType Authoring source of the policy. Possible values are: deviceConfiguration, deviceIntent.
    */
    private ?SecurityBaselinePolicySourceType $sourceType = null;
    
    /**
     * Instantiates a new securityBaselineContributingPolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityBaselineContributingPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityBaselineContributingPolicy {
        return new SecurityBaselineContributingPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Name of the policy
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
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'sourceId' => function (ParseNode $n) use ($o) { $o->setSourceId($n->getStringValue()); },
            'sourceType' => function (ParseNode $n) use ($o) { $o->setSourceType($n->getEnumValue(SecurityBaselinePolicySourceType::class)); },
        ];
    }

    /**
     * Gets the sourceId property value. Unique identifier of the policy
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the sourceType property value. Authoring source of the policy. Possible values are: deviceConfiguration, deviceIntent.
     * @return SecurityBaselinePolicySourceType|null
    */
    public function getSourceType(): ?SecurityBaselinePolicySourceType {
        return $this->sourceType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('sourceId', $this->sourceId);
        $writer->writeEnumValue('sourceType', $this->sourceType);
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
     * Sets the displayName property value. Name of the policy
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the sourceId property value. Unique identifier of the policy
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the sourceType property value. Authoring source of the policy. Possible values are: deviceConfiguration, deviceIntent.
     *  @param SecurityBaselinePolicySourceType|null $value Value to set for the sourceType property.
    */
    public function setSourceType(?SecurityBaselinePolicySourceType $value ): void {
        $this->sourceType = $value;
    }

}
