<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationIdentityCreationConfiguration extends EducationIdentitySynchronizationConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<EducationIdentityDomain>|null $userDomains The userDomains property
    */
    private ?array $userDomains = null;
    
    /**
     * Instantiates a new EducationIdentityCreationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationIdentityCreationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationIdentityCreationConfiguration {
        return new EducationIdentityCreationConfiguration();
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
            'userDomains' => function (ParseNode $n) use ($o) { $o->setUserDomains($n->getCollectionOfObjectValues(array(EducationIdentityDomain::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the userDomains property value. The userDomains property
     * @return array<EducationIdentityDomain>|null
    */
    public function getUserDomains(): ?array {
        return $this->userDomains;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('userDomains', $this->userDomains);
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
     * Sets the userDomains property value. The userDomains property
     *  @param array<EducationIdentityDomain>|null $value Value to set for the userDomains property.
    */
    public function setUserDomains(?array $value ): void {
        $this->userDomains = $value;
    }

}
