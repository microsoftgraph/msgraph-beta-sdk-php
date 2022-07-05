<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppLogCollectionDownloadDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AppLogDecryptionAlgorithm|null $appLogDecryptionAlgorithm DecryptionAlgorithm for Content. Possible values are: aes256.
    */
    private ?AppLogDecryptionAlgorithm $appLogDecryptionAlgorithm = null;
    
    /**
     * @var string|null $decryptionKey DecryptionKey as string
    */
    private ?string $decryptionKey = null;
    
    /**
     * @var string|null $downloadUrl Download SAS Url for completed AppLogUploadRequest
    */
    private ?string $downloadUrl = null;
    
    /**
     * Instantiates a new AppLogCollectionDownloadDetails and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppLogCollectionDownloadDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppLogCollectionDownloadDetails {
        return new AppLogCollectionDownloadDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appLogDecryptionAlgorithm property value. DecryptionAlgorithm for Content. Possible values are: aes256.
     * @return AppLogDecryptionAlgorithm|null
    */
    public function getAppLogDecryptionAlgorithm(): ?AppLogDecryptionAlgorithm {
        return $this->appLogDecryptionAlgorithm;
    }

    /**
     * Gets the decryptionKey property value. DecryptionKey as string
     * @return string|null
    */
    public function getDecryptionKey(): ?string {
        return $this->decryptionKey;
    }

    /**
     * Gets the downloadUrl property value. Download SAS Url for completed AppLogUploadRequest
     * @return string|null
    */
    public function getDownloadUrl(): ?string {
        return $this->downloadUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appLogDecryptionAlgorithm' => function (ParseNode $n) use ($o) { $o->setAppLogDecryptionAlgorithm($n->getEnumValue(AppLogDecryptionAlgorithm::class)); },
            'decryptionKey' => function (ParseNode $n) use ($o) { $o->setDecryptionKey($n->getStringValue()); },
            'downloadUrl' => function (ParseNode $n) use ($o) { $o->setDownloadUrl($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appLogDecryptionAlgorithm', $this->appLogDecryptionAlgorithm);
        $writer->writeStringValue('decryptionKey', $this->decryptionKey);
        $writer->writeStringValue('downloadUrl', $this->downloadUrl);
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
     * Sets the appLogDecryptionAlgorithm property value. DecryptionAlgorithm for Content. Possible values are: aes256.
     *  @param AppLogDecryptionAlgorithm|null $value Value to set for the appLogDecryptionAlgorithm property.
    */
    public function setAppLogDecryptionAlgorithm(?AppLogDecryptionAlgorithm $value ): void {
        $this->appLogDecryptionAlgorithm = $value;
    }

    /**
     * Sets the decryptionKey property value. DecryptionKey as string
     *  @param string|null $value Value to set for the decryptionKey property.
    */
    public function setDecryptionKey(?string $value ): void {
        $this->decryptionKey = $value;
    }

    /**
     * Sets the downloadUrl property value. Download SAS Url for completed AppLogUploadRequest
     *  @param string|null $value Value to set for the downloadUrl property.
    */
    public function setDownloadUrl(?string $value ): void {
        $this->downloadUrl = $value;
    }

}
