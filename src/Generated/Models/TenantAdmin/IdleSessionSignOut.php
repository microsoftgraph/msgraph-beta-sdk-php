<?php

namespace Microsoft\Graph\Beta\Generated\Models\TenantAdmin;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdleSessionSignOut implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isEnabled Indicates whether the idle session sign-out policy is enabled.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $signOutAfterInSeconds Number of seconds of inactivity after which a user is signed out.
    */
    private ?int $signOutAfterInSeconds = null;
    
    /**
     * @var int|null $warnAfterInSeconds Number of seconds of inactivity after which a user is notified that they'll be signed out.
    */
    private ?int $warnAfterInSeconds = null;
    
    /**
     * Instantiates a new idleSessionSignOut and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.tenantAdmin.idleSessionSignOut');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdleSessionSignOut
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdleSessionSignOut {
        return new IdleSessionSignOut();
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
        return  [
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'signOutAfterInSeconds' => fn(ParseNode $n) => $o->setSignOutAfterInSeconds($n->getIntegerValue()),
            'warnAfterInSeconds' => fn(ParseNode $n) => $o->setWarnAfterInSeconds($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the isEnabled property value. Indicates whether the idle session sign-out policy is enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the signOutAfterInSeconds property value. Number of seconds of inactivity after which a user is signed out.
     * @return int|null
    */
    public function getSignOutAfterInSeconds(): ?int {
        return $this->signOutAfterInSeconds;
    }

    /**
     * Gets the warnAfterInSeconds property value. Number of seconds of inactivity after which a user is notified that they'll be signed out.
     * @return int|null
    */
    public function getWarnAfterInSeconds(): ?int {
        return $this->warnAfterInSeconds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('signOutAfterInSeconds', $this->signOutAfterInSeconds);
        $writer->writeIntegerValue('warnAfterInSeconds', $this->warnAfterInSeconds);
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
     * Sets the isEnabled property value. Indicates whether the idle session sign-out policy is enabled.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the signOutAfterInSeconds property value. Number of seconds of inactivity after which a user is signed out.
     *  @param int|null $value Value to set for the signOutAfterInSeconds property.
    */
    public function setSignOutAfterInSeconds(?int $value ): void {
        $this->signOutAfterInSeconds = $value;
    }

    /**
     * Sets the warnAfterInSeconds property value. Number of seconds of inactivity after which a user is notified that they'll be signed out.
     *  @param int|null $value Value to set for the warnAfterInSeconds property.
    */
    public function setWarnAfterInSeconds(?int $value ): void {
        $this->warnAfterInSeconds = $value;
    }

}
