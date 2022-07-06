<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DisplayTemplate>|null $eDiscoveryResultTemplates The eDiscoveryResultTemplates property
    */
    private ?array $eDiscoveryResultTemplates = null;
    
    /**
     * Instantiates a new complianceSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceSettings {
        return new ComplianceSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the eDiscoveryResultTemplates property value. The eDiscoveryResultTemplates property
     * @return array<DisplayTemplate>|null
    */
    public function getEDiscoveryResultTemplates(): ?array {
        return $this->eDiscoveryResultTemplates;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'eDiscoveryResultTemplates' => function (ParseNode $n) use ($o) { $o->setEDiscoveryResultTemplates($n->getCollectionOfObjectValues(array(DisplayTemplate::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('eDiscoveryResultTemplates', $this->eDiscoveryResultTemplates);
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
     * Sets the eDiscoveryResultTemplates property value. The eDiscoveryResultTemplates property
     *  @param array<DisplayTemplate>|null $value Value to set for the eDiscoveryResultTemplates property.
    */
    public function setEDiscoveryResultTemplates(?array $value ): void {
        $this->eDiscoveryResultTemplates = $value;
    }

}
