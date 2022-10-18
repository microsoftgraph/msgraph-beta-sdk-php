<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesPublishingSingleSignOn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var KerberosSignOnSettings|null $kerberosSignOnSettings The Kerberos Constrained Delegation settings for applications that use Integrated Window Authentication.
    */
    private ?KerberosSignOnSettings $kerberosSignOnSettings = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var SingleSignOnMode|null $singleSignOnMode The preferred single-sign on mode for the application. Possible values are: none, onPremisesKerberos, aadHeaderBased,pingHeaderBased.
    */
    private ?SingleSignOnMode $singleSignOnMode = null;
    
    /**
     * Instantiates a new onPremisesPublishingSingleSignOn and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.onPremisesPublishingSingleSignOn');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesPublishingSingleSignOn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesPublishingSingleSignOn {
        return new OnPremisesPublishingSingleSignOn();
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
            'kerberosSignOnSettings' => fn(ParseNode $n) => $o->setKerberosSignOnSettings($n->getObjectValue([KerberosSignOnSettings::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'singleSignOnMode' => fn(ParseNode $n) => $o->setSingleSignOnMode($n->getEnumValue(SingleSignOnMode::class)),
        ];
    }

    /**
     * Gets the kerberosSignOnSettings property value. The Kerberos Constrained Delegation settings for applications that use Integrated Window Authentication.
     * @return KerberosSignOnSettings|null
    */
    public function getKerberosSignOnSettings(): ?KerberosSignOnSettings {
        return $this->kerberosSignOnSettings;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the singleSignOnMode property value. The preferred single-sign on mode for the application. Possible values are: none, onPremisesKerberos, aadHeaderBased,pingHeaderBased.
     * @return SingleSignOnMode|null
    */
    public function getSingleSignOnMode(): ?SingleSignOnMode {
        return $this->singleSignOnMode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('kerberosSignOnSettings', $this->kerberosSignOnSettings);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('singleSignOnMode', $this->singleSignOnMode);
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
     * Sets the kerberosSignOnSettings property value. The Kerberos Constrained Delegation settings for applications that use Integrated Window Authentication.
     *  @param KerberosSignOnSettings|null $value Value to set for the kerberosSignOnSettings property.
    */
    public function setKerberosSignOnSettings(?KerberosSignOnSettings $value ): void {
        $this->kerberosSignOnSettings = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the singleSignOnMode property value. The preferred single-sign on mode for the application. Possible values are: none, onPremisesKerberos, aadHeaderBased,pingHeaderBased.
     *  @param SingleSignOnMode|null $value Value to set for the singleSignOnMode property.
    */
    public function setSingleSignOnMode(?SingleSignOnMode $value ): void {
        $this->singleSignOnMode = $value;
    }

}
