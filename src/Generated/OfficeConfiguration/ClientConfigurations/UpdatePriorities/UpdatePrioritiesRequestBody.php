<?php

namespace Microsoft\Graph\Beta\Generated\OfficeConfiguration\ClientConfigurations\UpdatePriorities;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdatePrioritiesRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $officeConfigurationPolicyIds The officeConfigurationPolicyIds property */
    private ?array $officeConfigurationPolicyIds = null;
    
    /** @var array<int>|null $officeConfigurationPriorities The officeConfigurationPriorities property */
    private ?array $officeConfigurationPriorities = null;
    
    /**
     * Instantiates a new updatePrioritiesRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatePrioritiesRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UpdatePrioritiesRequestBody {
        return new UpdatePrioritiesRequestBody();
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
        return  [
            'officeConfigurationPolicyIds' => function (self $o, ParseNode $n) { $o->setOfficeConfigurationPolicyIds($n->getCollectionOfPrimitiveValues()); },
            'officeConfigurationPriorities' => function (self $o, ParseNode $n) { $o->setOfficeConfigurationPriorities($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the officeConfigurationPolicyIds property value. The officeConfigurationPolicyIds property
     * @return array<string>|null
    */
    public function getOfficeConfigurationPolicyIds(): ?array {
        return $this->officeConfigurationPolicyIds;
    }

    /**
     * Gets the officeConfigurationPriorities property value. The officeConfigurationPriorities property
     * @return array<int>|null
    */
    public function getOfficeConfigurationPriorities(): ?array {
        return $this->officeConfigurationPriorities;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('officeConfigurationPolicyIds', $this->officeConfigurationPolicyIds);
        $writer->writeCollectionOfPrimitiveValues('officeConfigurationPriorities', $this->officeConfigurationPriorities);
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
     * Sets the officeConfigurationPolicyIds property value. The officeConfigurationPolicyIds property
     *  @param array<string>|null $value Value to set for the officeConfigurationPolicyIds property.
    */
    public function setOfficeConfigurationPolicyIds(?array $value ): void {
        $this->officeConfigurationPolicyIds = $value;
    }

    /**
     * Sets the officeConfigurationPriorities property value. The officeConfigurationPriorities property
     *  @param array<int>|null $value Value to set for the officeConfigurationPriorities property.
    */
    public function setOfficeConfigurationPriorities(?array $value ): void {
        $this->officeConfigurationPriorities = $value;
    }

}
