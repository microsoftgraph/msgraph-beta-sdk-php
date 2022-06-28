<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationIdentityMatchingConfiguration extends EducationIdentitySynchronizationConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<EducationIdentityMatchingOptions>|null $matchingOptions Mapping between the user account and the options to use to uniquely identify the user to update.
    */
    private ?array $matchingOptions = null;
    
    /**
     * Instantiates a new EducationIdentityMatchingConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationIdentityMatchingConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationIdentityMatchingConfiguration {
        return new EducationIdentityMatchingConfiguration();
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
            'matchingOptions' => function (ParseNode $n) use ($o) { $o->setMatchingOptions($n->getCollectionOfObjectValues(array(EducationIdentityMatchingOptions::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the matchingOptions property value. Mapping between the user account and the options to use to uniquely identify the user to update.
     * @return array<EducationIdentityMatchingOptions>|null
    */
    public function getMatchingOptions(): ?array {
        return $this->matchingOptions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('matchingOptions', $this->matchingOptions);
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
     * Sets the matchingOptions property value. Mapping between the user account and the options to use to uniquely identify the user to update.
     *  @param array<EducationIdentityMatchingOptions>|null $value Value to set for the matchingOptions property.
    */
    public function setMatchingOptions(?array $value ): void {
        $this->matchingOptions = $value;
    }

}
