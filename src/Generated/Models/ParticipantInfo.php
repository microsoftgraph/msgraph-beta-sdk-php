<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParticipantInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $countryCode The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only.
    */
    private ?string $countryCode = null;
    
    /**
     * @var EndpointType|null $endpointType The type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue. Read-only.
    */
    private ?EndpointType $endpointType = null;
    
    /**
     * @var IdentitySet|null $identity The identity property
    */
    private ?IdentitySet $identity = null;
    
    /**
     * @var string|null $languageId The language culture string. Read-only.
    */
    private ?string $languageId = null;
    
    /**
     * @var IdentitySet|null $nonAnonymizedIdentity The nonAnonymizedIdentity property
    */
    private ?IdentitySet $nonAnonymizedIdentity = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $participantId The participant ID of the participant. Read-only.
    */
    private ?string $participantId = null;
    
    /**
     * @var string|null $platformId The client platform ID of the participant. Read-only.
    */
    private ?string $platformId = null;
    
    /**
     * @var string|null $region The home region of the participant. This can be a country, a continent, or a larger geographic region. This does not change based on the participant's current physical location, unlike countryCode. Read-only.
    */
    private ?string $region = null;
    
    /**
     * Instantiates a new participantInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.participantInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParticipantInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParticipantInfo {
        return new ParticipantInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the countryCode property value. The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * Gets the endpointType property value. The type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue. Read-only.
     * @return EndpointType|null
    */
    public function getEndpointType(): ?EndpointType {
        return $this->endpointType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryCode' => function (ParseNode $n) use ($o) { $o->setCountryCode($n->getStringValue()); },
            'endpointType' => function (ParseNode $n) use ($o) { $o->setEndpointType($n->getEnumValue(EndpointType::class)); },
            'identity' => function (ParseNode $n) use ($o) { $o->setIdentity($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'languageId' => function (ParseNode $n) use ($o) { $o->setLanguageId($n->getStringValue()); },
            'nonAnonymizedIdentity' => function (ParseNode $n) use ($o) { $o->setNonAnonymizedIdentity($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'participantId' => function (ParseNode $n) use ($o) { $o->setParticipantId($n->getStringValue()); },
            'platformId' => function (ParseNode $n) use ($o) { $o->setPlatformId($n->getStringValue()); },
            'region' => function (ParseNode $n) use ($o) { $o->setRegion($n->getStringValue()); },
        ];
    }

    /**
     * Gets the identity property value. The identity property
     * @return IdentitySet|null
    */
    public function getIdentity(): ?IdentitySet {
        return $this->identity;
    }

    /**
     * Gets the languageId property value. The language culture string. Read-only.
     * @return string|null
    */
    public function getLanguageId(): ?string {
        return $this->languageId;
    }

    /**
     * Gets the nonAnonymizedIdentity property value. The nonAnonymizedIdentity property
     * @return IdentitySet|null
    */
    public function getNonAnonymizedIdentity(): ?IdentitySet {
        return $this->nonAnonymizedIdentity;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the participantId property value. The participant ID of the participant. Read-only.
     * @return string|null
    */
    public function getParticipantId(): ?string {
        return $this->participantId;
    }

    /**
     * Gets the platformId property value. The client platform ID of the participant. Read-only.
     * @return string|null
    */
    public function getPlatformId(): ?string {
        return $this->platformId;
    }

    /**
     * Gets the region property value. The home region of the participant. This can be a country, a continent, or a larger geographic region. This does not change based on the participant's current physical location, unlike countryCode. Read-only.
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->region;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('countryCode', $this->countryCode);
        $writer->writeEnumValue('endpointType', $this->endpointType);
        $writer->writeObjectValue('identity', $this->identity);
        $writer->writeStringValue('languageId', $this->languageId);
        $writer->writeObjectValue('nonAnonymizedIdentity', $this->nonAnonymizedIdentity);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('participantId', $this->participantId);
        $writer->writeStringValue('platformId', $this->platformId);
        $writer->writeStringValue('region', $this->region);
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
     * Sets the countryCode property value. The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only.
     *  @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value ): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the endpointType property value. The type of endpoint the participant is using. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone and unknownFutureValue. Read-only.
     *  @param EndpointType|null $value Value to set for the endpointType property.
    */
    public function setEndpointType(?EndpointType $value ): void {
        $this->endpointType = $value;
    }

    /**
     * Sets the identity property value. The identity property
     *  @param IdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?IdentitySet $value ): void {
        $this->identity = $value;
    }

    /**
     * Sets the languageId property value. The language culture string. Read-only.
     *  @param string|null $value Value to set for the languageId property.
    */
    public function setLanguageId(?string $value ): void {
        $this->languageId = $value;
    }

    /**
     * Sets the nonAnonymizedIdentity property value. The nonAnonymizedIdentity property
     *  @param IdentitySet|null $value Value to set for the nonAnonymizedIdentity property.
    */
    public function setNonAnonymizedIdentity(?IdentitySet $value ): void {
        $this->nonAnonymizedIdentity = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the participantId property value. The participant ID of the participant. Read-only.
     *  @param string|null $value Value to set for the participantId property.
    */
    public function setParticipantId(?string $value ): void {
        $this->participantId = $value;
    }

    /**
     * Sets the platformId property value. The client platform ID of the participant. Read-only.
     *  @param string|null $value Value to set for the platformId property.
    */
    public function setPlatformId(?string $value ): void {
        $this->platformId = $value;
    }

    /**
     * Sets the region property value. The home region of the participant. This can be a country, a continent, or a larger geographic region. This does not change based on the participant's current physical location, unlike countryCode. Read-only.
     *  @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value ): void {
        $this->region = $value;
    }

}
