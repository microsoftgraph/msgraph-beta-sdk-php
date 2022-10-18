<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageTargeting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $excludeIds The groups that will not receive the message. If a user from an excluded group is part of an included group, it will not receive the message
    */
    private ?array $excludeIds = null;
    
    /**
     * @var array<string>|null $includeIds The groups that will be targeted and receive the message
    */
    private ?array $includeIds = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var OrganizationalMessageTargetingType|null $targetingType Indicates the type of targeting
    */
    private ?OrganizationalMessageTargetingType $targetingType = null;
    
    /**
     * Instantiates a new organizationalMessageTargeting and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageTargeting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageTargeting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageTargeting {
        return new OrganizationalMessageTargeting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeIds property value. The groups that will not receive the message. If a user from an excluded group is part of an included group, it will not receive the message
     * @return array<string>|null
    */
    public function getExcludeIds(): ?array {
        return $this->excludeIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeIds' => fn(ParseNode $n) => $o->setExcludeIds($n->getCollectionOfPrimitiveValues()),
            'includeIds' => fn(ParseNode $n) => $o->setIncludeIds($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'targetingType' => fn(ParseNode $n) => $o->setTargetingType($n->getEnumValue(OrganizationalMessageTargetingType::class)),
        ];
    }

    /**
     * Gets the includeIds property value. The groups that will be targeted and receive the message
     * @return array<string>|null
    */
    public function getIncludeIds(): ?array {
        return $this->includeIds;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the targetingType property value. Indicates the type of targeting
     * @return OrganizationalMessageTargetingType|null
    */
    public function getTargetingType(): ?OrganizationalMessageTargetingType {
        return $this->targetingType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeIds', $this->excludeIds);
        $writer->writeCollectionOfPrimitiveValues('includeIds', $this->includeIds);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('targetingType', $this->targetingType);
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
     * Sets the excludeIds property value. The groups that will not receive the message. If a user from an excluded group is part of an included group, it will not receive the message
     *  @param array<string>|null $value Value to set for the excludeIds property.
    */
    public function setExcludeIds(?array $value ): void {
        $this->excludeIds = $value;
    }

    /**
     * Sets the includeIds property value. The groups that will be targeted and receive the message
     *  @param array<string>|null $value Value to set for the includeIds property.
    */
    public function setIncludeIds(?array $value ): void {
        $this->includeIds = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the targetingType property value. Indicates the type of targeting
     *  @param OrganizationalMessageTargetingType|null $value Value to set for the targetingType property.
    */
    public function setTargetingType(?OrganizationalMessageTargetingType $value ): void {
        $this->targetingType = $value;
    }

}
