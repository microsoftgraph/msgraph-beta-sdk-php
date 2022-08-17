<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantAllowOrBlockListAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var TenantAllowBlockListAction|null $action Specifies whether the tenant allow block list is an allow or block. The possible values are: allow, block, and unkownFutureValue.
    */
    private ?TenantAllowBlockListAction $action = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $expirationDateTime Specifies when the tenant allow-block-list expires in date time.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $note Specifies the note added to the tenant allow block list entry in the format of string.
    */
    private ?string $note = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<TenantAllowBlockListEntryResult>|null $results Contains the result of the submission that lead to the tenant allow-block-list entry creation.
    */
    private ?array $results = null;
    
    /**
     * Instantiates a new tenantAllowOrBlockListAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.tenantAllowOrBlockListAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantAllowOrBlockListAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantAllowOrBlockListAction {
        return new TenantAllowOrBlockListAction();
    }

    /**
     * Gets the action property value. Specifies whether the tenant allow block list is an allow or block. The possible values are: allow, block, and unkownFutureValue.
     * @return TenantAllowBlockListAction|null
    */
    public function getAction(): ?TenantAllowBlockListAction {
        return $this->action;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expirationDateTime property value. Specifies when the tenant allow-block-list expires in date time.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getEnumValue(TenantAllowBlockListAction::class)); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'note' => function (ParseNode $n) use ($o) { $o->setNote($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'results' => function (ParseNode $n) use ($o) { $o->setResults($n->getCollectionOfObjectValues(array(TenantAllowBlockListEntryResult::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the note property value. Specifies the note added to the tenant allow block list entry in the format of string.
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the results property value. Contains the result of the submission that lead to the tenant allow-block-list entry creation.
     * @return array<TenantAllowBlockListEntryResult>|null
    */
    public function getResults(): ?array {
        return $this->results;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('note', $this->note);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('results', $this->results);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. Specifies whether the tenant allow block list is an allow or block. The possible values are: allow, block, and unkownFutureValue.
     *  @param TenantAllowBlockListAction|null $value Value to set for the action property.
    */
    public function setAction(?TenantAllowBlockListAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the expirationDateTime property value. Specifies when the tenant allow-block-list expires in date time.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the note property value. Specifies the note added to the tenant allow block list entry in the format of string.
     *  @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value ): void {
        $this->note = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the results property value. Contains the result of the submission that lead to the tenant allow-block-list entry creation.
     *  @param array<TenantAllowBlockListEntryResult>|null $value Value to set for the results property.
    */
    public function setResults(?array $value ): void {
        $this->results = $value;
    }

}
