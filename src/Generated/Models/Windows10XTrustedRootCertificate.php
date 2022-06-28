<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Windows10XTrustedRootCertificate extends DeviceManagementResourceAccessProfileBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $certFileName File name to display in UI.
    */
    private ?string $certFileName = null;
    
    /**
     * @var CertificateDestinationStore|null $destinationStore Destination store location for the Trusted Root Certificate. Possible values are: computerCertStoreRoot, computerCertStoreIntermediate, userCertStoreIntermediate.
    */
    private ?CertificateDestinationStore $destinationStore = null;
    
    /**
     * @var StreamInterface|null $trustedRootCertificate Trusted Root Certificate
    */
    private ?StreamInterface $trustedRootCertificate = null;
    
    /**
     * Instantiates a new Windows10XTrustedRootCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10XTrustedRootCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10XTrustedRootCertificate {
        return new Windows10XTrustedRootCertificate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certFileName property value. File name to display in UI.
     * @return string|null
    */
    public function getCertFileName(): ?string {
        return $this->certFileName;
    }

    /**
     * Gets the destinationStore property value. Destination store location for the Trusted Root Certificate. Possible values are: computerCertStoreRoot, computerCertStoreIntermediate, userCertStoreIntermediate.
     * @return CertificateDestinationStore|null
    */
    public function getDestinationStore(): ?CertificateDestinationStore {
        return $this->destinationStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certFileName' => function (ParseNode $n) use ($o) { $o->setCertFileName($n->getStringValue()); },
            'destinationStore' => function (ParseNode $n) use ($o) { $o->setDestinationStore($n->getEnumValue(CertificateDestinationStore::class)); },
            'trustedRootCertificate' => function (ParseNode $n) use ($o) { $o->setTrustedRootCertificate($n->getBinaryContent()); },
        ]);
    }

    /**
     * Gets the trustedRootCertificate property value. Trusted Root Certificate
     * @return StreamInterface|null
    */
    public function getTrustedRootCertificate(): ?StreamInterface {
        return $this->trustedRootCertificate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certFileName', $this->certFileName);
        $writer->writeEnumValue('destinationStore', $this->destinationStore);
        $writer->writeBinaryContent('trustedRootCertificate', $this->trustedRootCertificate);
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
     * Sets the certFileName property value. File name to display in UI.
     *  @param string|null $value Value to set for the certFileName property.
    */
    public function setCertFileName(?string $value ): void {
        $this->certFileName = $value;
    }

    /**
     * Sets the destinationStore property value. Destination store location for the Trusted Root Certificate. Possible values are: computerCertStoreRoot, computerCertStoreIntermediate, userCertStoreIntermediate.
     *  @param CertificateDestinationStore|null $value Value to set for the destinationStore property.
    */
    public function setDestinationStore(?CertificateDestinationStore $value ): void {
        $this->destinationStore = $value;
    }

    /**
     * Sets the trustedRootCertificate property value. Trusted Root Certificate
     *  @param StreamInterface|null $value Value to set for the trustedRootCertificate property.
    */
    public function setTrustedRootCertificate(?StreamInterface $value ): void {
        $this->trustedRootCertificate = $value;
    }

}
