<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10PFXImportCertificateProfile extends DeviceConfiguration implements Parsable 
{
    /**
     * @var KeyStorageProviderOption|null $keyStorageProvider Not yet documented. Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
    */
    private ?KeyStorageProviderOption $keyStorageProvider = null;
    
    /**
     * Instantiates a new Windows10PFXImportCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10PFXImportCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10PFXImportCertificateProfile {
        return new Windows10PFXImportCertificateProfile();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'keyStorageProvider' => function (ParseNode $n) use ($o) { $o->setKeyStorageProvider($n->getEnumValue(KeyStorageProviderOption::class)); },
        ]);
    }

    /**
     * Gets the keyStorageProvider property value. Not yet documented. Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
     * @return KeyStorageProviderOption|null
    */
    public function getKeyStorageProvider(): ?KeyStorageProviderOption {
        return $this->keyStorageProvider;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('keyStorageProvider', $this->keyStorageProvider);
    }

    /**
     * Sets the keyStorageProvider property value. Not yet documented. Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
     *  @param KeyStorageProviderOption|null $value Value to set for the keyStorageProvider property.
    */
    public function setKeyStorageProvider(?KeyStorageProviderOption $value ): void {
        $this->keyStorageProvider = $value;
    }

}
