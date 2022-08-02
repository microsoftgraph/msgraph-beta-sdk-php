<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class SelfSignedCertificate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $customKeyIdentifier Custom key identifier.
    */
    private ?StreamInterface $customKeyIdentifier = null;
    
    /**
     * @var string|null $displayName The friendly name for the key.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $endDateTime The date and time at which the credential expires. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var StreamInterface|null $key The value for the key credential. Should be a base-64 encoded value.
    */
    private ?StreamInterface $key = null;
    
    /**
     * @var string|null $keyId The unique identifier (GUID) for the key.
    */
    private ?string $keyId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $startDateTime The date and time at which the credential becomes valid. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $thumbprint The thumbprint value for the key.
    */
    private ?string $thumbprint = null;
    
    /**
     * @var string|null $type The type of key credential. 'AsymmetricX509Cert'.
    */
    private ?string $type = null;
    
    /**
     * @var string|null $usage A string that describes the purpose for which the key can be used. For example, 'Verify'.
    */
    private ?string $usage = null;
    
    /**
     * Instantiates a new SelfSignedCertificate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.selfSignedCertificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelfSignedCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelfSignedCertificate {
        return new SelfSignedCertificate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the customKeyIdentifier property value. Custom key identifier.
     * @return StreamInterface|null
    */
    public function getCustomKeyIdentifier(): ?StreamInterface {
        return $this->customKeyIdentifier;
    }

    /**
     * Gets the displayName property value. The friendly name for the key.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endDateTime property value. The date and time at which the credential expires. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customKeyIdentifier' => function (ParseNode $n) use ($o) { $o->setCustomKeyIdentifier($n->getBinaryContent()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'key' => function (ParseNode $n) use ($o) { $o->setKey($n->getBinaryContent()); },
            'keyId' => function (ParseNode $n) use ($o) { $o->setKeyId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'thumbprint' => function (ParseNode $n) use ($o) { $o->setThumbprint($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
            'usage' => function (ParseNode $n) use ($o) { $o->setUsage($n->getStringValue()); },
        ];
    }

    /**
     * Gets the key property value. The value for the key credential. Should be a base-64 encoded value.
     * @return StreamInterface|null
    */
    public function getKey(): ?StreamInterface {
        return $this->key;
    }

    /**
     * Gets the keyId property value. The unique identifier (GUID) for the key.
     * @return string|null
    */
    public function getKeyId(): ?string {
        return $this->keyId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the startDateTime property value. The date and time at which the credential becomes valid. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the thumbprint property value. The thumbprint value for the key.
     * @return string|null
    */
    public function getThumbprint(): ?string {
        return $this->thumbprint;
    }

    /**
     * Gets the type property value. The type of key credential. 'AsymmetricX509Cert'.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the usage property value. A string that describes the purpose for which the key can be used. For example, 'Verify'.
     * @return string|null
    */
    public function getUsage(): ?string {
        return $this->usage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('customKeyIdentifier', $this->customKeyIdentifier);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeBinaryContent('key', $this->key);
        $writer->writeStringValue('keyId', $this->keyId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('thumbprint', $this->thumbprint);
        $writer->writeStringValue('type', $this->type);
        $writer->writeStringValue('usage', $this->usage);
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
     * Sets the customKeyIdentifier property value. Custom key identifier.
     *  @param StreamInterface|null $value Value to set for the customKeyIdentifier property.
    */
    public function setCustomKeyIdentifier(?StreamInterface $value ): void {
        $this->customKeyIdentifier = $value;
    }

    /**
     * Sets the displayName property value. The friendly name for the key.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endDateTime property value. The date and time at which the credential expires. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the key property value. The value for the key credential. Should be a base-64 encoded value.
     *  @param StreamInterface|null $value Value to set for the key property.
    */
    public function setKey(?StreamInterface $value ): void {
        $this->key = $value;
    }

    /**
     * Sets the keyId property value. The unique identifier (GUID) for the key.
     *  @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value ): void {
        $this->keyId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the startDateTime property value. The date and time at which the credential becomes valid. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the thumbprint property value. The thumbprint value for the key.
     *  @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value ): void {
        $this->thumbprint = $value;
    }

    /**
     * Sets the type property value. The type of key credential. 'AsymmetricX509Cert'.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the usage property value. A string that describes the purpose for which the key can be used. For example, 'Verify'.
     *  @param string|null $value Value to set for the usage property.
    */
    public function setUsage(?string $value ): void {
        $this->usage = $value;
    }

}
