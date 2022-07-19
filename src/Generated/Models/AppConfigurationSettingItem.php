<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppConfigurationSettingItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appConfigKey app configuration key.
    */
    private ?string $appConfigKey = null;
    
    /**
     * @var MdmAppConfigKeyType|null $appConfigKeyType App configuration key types.
    */
    private ?MdmAppConfigKeyType $appConfigKeyType = null;
    
    /**
     * @var string|null $appConfigKeyValue app configuration key value.
    */
    private ?string $appConfigKeyValue = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new appConfigurationSettingItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.appConfigurationSettingItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConfigurationSettingItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConfigurationSettingItem {
        return new AppConfigurationSettingItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appConfigKey property value. app configuration key.
     * @return string|null
    */
    public function getAppConfigKey(): ?string {
        return $this->appConfigKey;
    }

    /**
     * Gets the appConfigKeyType property value. App configuration key types.
     * @return MdmAppConfigKeyType|null
    */
    public function getAppConfigKeyType(): ?MdmAppConfigKeyType {
        return $this->appConfigKeyType;
    }

    /**
     * Gets the appConfigKeyValue property value. app configuration key value.
     * @return string|null
    */
    public function getAppConfigKeyValue(): ?string {
        return $this->appConfigKeyValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appConfigKey' => function (ParseNode $n) use ($o) { $o->setAppConfigKey($n->getStringValue()); },
            'appConfigKeyType' => function (ParseNode $n) use ($o) { $o->setAppConfigKeyType($n->getEnumValue(MdmAppConfigKeyType::class)); },
            'appConfigKeyValue' => function (ParseNode $n) use ($o) { $o->setAppConfigKeyValue($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appConfigKey', $this->appConfigKey);
        $writer->writeEnumValue('appConfigKeyType', $this->appConfigKeyType);
        $writer->writeStringValue('appConfigKeyValue', $this->appConfigKeyValue);
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
     * Sets the appConfigKey property value. app configuration key.
     *  @param string|null $value Value to set for the appConfigKey property.
    */
    public function setAppConfigKey(?string $value ): void {
        $this->appConfigKey = $value;
    }

    /**
     * Sets the appConfigKeyType property value. App configuration key types.
     *  @param MdmAppConfigKeyType|null $value Value to set for the appConfigKeyType property.
    */
    public function setAppConfigKeyType(?MdmAppConfigKeyType $value ): void {
        $this->appConfigKeyType = $value;
    }

    /**
     * Sets the appConfigKeyValue property value. app configuration key value.
     *  @param string|null $value Value to set for the appConfigKeyValue property.
    */
    public function setAppConfigKeyValue(?string $value ): void {
        $this->appConfigKeyValue = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
