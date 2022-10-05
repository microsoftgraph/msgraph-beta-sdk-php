<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessGuestsOrExternalUsers implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ConditionalAccessExternalTenants|null $externalTenants The tenant ids of the selected types of external users. It could be either all b2b tenant, or a collection of tenant ids. External tenants can be specified only when guestOrExternalUserTypes is not null or an empty string.
    */
    private ?ConditionalAccessExternalTenants $externalTenants = null;
    
    /**
     * @var ConditionalAccessGuestOrExternalUserTypes|null $guestOrExternalUserTypes The guestOrExternalUserTypes property
    */
    private ?ConditionalAccessGuestOrExternalUserTypes $guestOrExternalUserTypes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new conditionalAccessGuestsOrExternalUsers and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessGuestsOrExternalUsers');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessGuestsOrExternalUsers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessGuestsOrExternalUsers {
        return new ConditionalAccessGuestsOrExternalUsers();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the externalTenants property value. The tenant ids of the selected types of external users. It could be either all b2b tenant, or a collection of tenant ids. External tenants can be specified only when guestOrExternalUserTypes is not null or an empty string.
     * @return ConditionalAccessExternalTenants|null
    */
    public function getExternalTenants(): ?ConditionalAccessExternalTenants {
        return $this->externalTenants;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'externalTenants' => function (ParseNode $n) use ($o) { $o->setExternalTenants($n->getObjectValue(array(ConditionalAccessExternalTenants::class, 'createFromDiscriminatorValue'))); },
            'guestOrExternalUserTypes' => function (ParseNode $n) use ($o) { $o->setGuestOrExternalUserTypes($n->getEnumValue(ConditionalAccessGuestOrExternalUserTypes::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the guestOrExternalUserTypes property value. The guestOrExternalUserTypes property
     * @return ConditionalAccessGuestOrExternalUserTypes|null
    */
    public function getGuestOrExternalUserTypes(): ?ConditionalAccessGuestOrExternalUserTypes {
        return $this->guestOrExternalUserTypes;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('externalTenants', $this->externalTenants);
        $writer->writeEnumValue('guestOrExternalUserTypes', $this->guestOrExternalUserTypes);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the externalTenants property value. The tenant ids of the selected types of external users. It could be either all b2b tenant, or a collection of tenant ids. External tenants can be specified only when guestOrExternalUserTypes is not null or an empty string.
     *  @param ConditionalAccessExternalTenants|null $value Value to set for the externalTenants property.
    */
    public function setExternalTenants(?ConditionalAccessExternalTenants $value ): void {
        $this->externalTenants = $value;
    }

    /**
     * Sets the guestOrExternalUserTypes property value. The guestOrExternalUserTypes property
     *  @param ConditionalAccessGuestOrExternalUserTypes|null $value Value to set for the guestOrExternalUserTypes property.
    */
    public function setGuestOrExternalUserTypes(?ConditionalAccessGuestOrExternalUserTypes $value ): void {
        $this->guestOrExternalUserTypes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
