<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClientCertificateAuthentication extends ApiAuthenticationConfigurationBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<Pkcs12CertificateInformation>|null $certificateList The list of certificates uploaded for this API connector.
    */
    private ?array $certificateList = null;
    
    /**
     * Instantiates a new ClientCertificateAuthentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientCertificateAuthentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientCertificateAuthentication {
        return new ClientCertificateAuthentication();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificateList property value. The list of certificates uploaded for this API connector.
     * @return array<Pkcs12CertificateInformation>|null
    */
    public function getCertificateList(): ?array {
        return $this->certificateList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateList' => function (ParseNode $n) use ($o) { $o->setCertificateList($n->getCollectionOfObjectValues(array(Pkcs12CertificateInformation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('certificateList', $this->certificateList);
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
     * Sets the certificateList property value. The list of certificates uploaded for this API connector.
     *  @param array<Pkcs12CertificateInformation>|null $value Value to set for the certificateList property.
    */
    public function setCertificateList(?array $value ): void {
        $this->certificateList = $value;
    }

}
