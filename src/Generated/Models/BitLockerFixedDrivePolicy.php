<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BitLockerFixedDrivePolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var BitLockerEncryptionMethod|null $encryptionMethod Select the encryption method for fixed drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
    */
    private ?BitLockerEncryptionMethod $encryptionMethod = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var BitLockerRecoveryOptions|null $recoveryOptions This policy setting allows you to control how BitLocker-protected fixed data drives are recovered in the absence of the required credentials. This policy setting is applied when you turn on BitLocker.
    */
    private ?BitLockerRecoveryOptions $recoveryOptions = null;
    
    /**
     * @var bool|null $requireEncryptionForWriteAccess This policy setting determines whether BitLocker protection is required for fixed data drives to be writable on a computer.
    */
    private ?bool $requireEncryptionForWriteAccess = null;
    
    /**
     * Instantiates a new bitLockerFixedDrivePolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.bitLockerFixedDrivePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BitLockerFixedDrivePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BitLockerFixedDrivePolicy {
        return new BitLockerFixedDrivePolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the encryptionMethod property value. Select the encryption method for fixed drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     * @return BitLockerEncryptionMethod|null
    */
    public function getEncryptionMethod(): ?BitLockerEncryptionMethod {
        return $this->encryptionMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'encryptionMethod' => fn(ParseNode $n) => $o->setEncryptionMethod($n->getEnumValue(BitLockerEncryptionMethod::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recoveryOptions' => fn(ParseNode $n) => $o->setRecoveryOptions($n->getObjectValue([BitLockerRecoveryOptions::class, 'createFromDiscriminatorValue'])),
            'requireEncryptionForWriteAccess' => fn(ParseNode $n) => $o->setRequireEncryptionForWriteAccess($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the recoveryOptions property value. This policy setting allows you to control how BitLocker-protected fixed data drives are recovered in the absence of the required credentials. This policy setting is applied when you turn on BitLocker.
     * @return BitLockerRecoveryOptions|null
    */
    public function getRecoveryOptions(): ?BitLockerRecoveryOptions {
        return $this->recoveryOptions;
    }

    /**
     * Gets the requireEncryptionForWriteAccess property value. This policy setting determines whether BitLocker protection is required for fixed data drives to be writable on a computer.
     * @return bool|null
    */
    public function getRequireEncryptionForWriteAccess(): ?bool {
        return $this->requireEncryptionForWriteAccess;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('encryptionMethod', $this->encryptionMethod);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('recoveryOptions', $this->recoveryOptions);
        $writer->writeBooleanValue('requireEncryptionForWriteAccess', $this->requireEncryptionForWriteAccess);
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
     * Sets the encryptionMethod property value. Select the encryption method for fixed drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     *  @param BitLockerEncryptionMethod|null $value Value to set for the encryptionMethod property.
    */
    public function setEncryptionMethod(?BitLockerEncryptionMethod $value ): void {
        $this->encryptionMethod = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the recoveryOptions property value. This policy setting allows you to control how BitLocker-protected fixed data drives are recovered in the absence of the required credentials. This policy setting is applied when you turn on BitLocker.
     *  @param BitLockerRecoveryOptions|null $value Value to set for the recoveryOptions property.
    */
    public function setRecoveryOptions(?BitLockerRecoveryOptions $value ): void {
        $this->recoveryOptions = $value;
    }

    /**
     * Sets the requireEncryptionForWriteAccess property value. This policy setting determines whether BitLocker protection is required for fixed data drives to be writable on a computer.
     *  @param bool|null $value Value to set for the requireEncryptionForWriteAccess property.
    */
    public function setRequireEncryptionForWriteAccess(?bool $value ): void {
        $this->requireEncryptionForWriteAccess = $value;
    }

}
