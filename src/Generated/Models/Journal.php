<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Journal extends Entity implements Parsable 
{
    /**
     * @var Account|null $account The account property
    */
    private ?Account $account = null;
    
    /**
     * @var string|null $balancingAccountId The balancingAccountId property
    */
    private ?string $balancingAccountId = null;
    
    /**
     * @var string|null $balancingAccountNumber The balancingAccountNumber property
    */
    private ?string $balancingAccountNumber = null;
    
    /**
     * @var string|null $code The code property
    */
    private ?string $code = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var array<JournalLine>|null $journalLines The journalLines property
    */
    private ?array $journalLines = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new journal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.journal');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Journal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Journal {
        return new Journal();
    }

    /**
     * Gets the account property value. The account property
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->account;
    }

    /**
     * Gets the balancingAccountId property value. The balancingAccountId property
     * @return string|null
    */
    public function getBalancingAccountId(): ?string {
        return $this->balancingAccountId;
    }

    /**
     * Gets the balancingAccountNumber property value. The balancingAccountNumber property
     * @return string|null
    */
    public function getBalancingAccountNumber(): ?string {
        return $this->balancingAccountNumber;
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (ParseNode $n) use ($o) { $o->setAccount($n->getObjectValue(array(Account::class, 'createFromDiscriminatorValue'))); },
            'balancingAccountId' => function (ParseNode $n) use ($o) { $o->setBalancingAccountId($n->getStringValue()); },
            'balancingAccountNumber' => function (ParseNode $n) use ($o) { $o->setBalancingAccountNumber($n->getStringValue()); },
            'code' => function (ParseNode $n) use ($o) { $o->setCode($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'journalLines' => function (ParseNode $n) use ($o) { $o->setJournalLines($n->getCollectionOfObjectValues(array(JournalLine::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the journalLines property value. The journalLines property
     * @return array<JournalLine>|null
    */
    public function getJournalLines(): ?array {
        return $this->journalLines;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->account);
        $writer->writeStringValue('balancingAccountId', $this->balancingAccountId);
        $writer->writeStringValue('balancingAccountNumber', $this->balancingAccountNumber);
        $writer->writeStringValue('code', $this->code);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('journalLines', $this->journalLines);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the account property value. The account property
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the balancingAccountId property value. The balancingAccountId property
     *  @param string|null $value Value to set for the balancingAccountId property.
    */
    public function setBalancingAccountId(?string $value ): void {
        $this->balancingAccountId = $value;
    }

    /**
     * Sets the balancingAccountNumber property value. The balancingAccountNumber property
     *  @param string|null $value Value to set for the balancingAccountNumber property.
    */
    public function setBalancingAccountNumber(?string $value ): void {
        $this->balancingAccountNumber = $value;
    }

    /**
     * Sets the code property value. The code property
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the journalLines property value. The journalLines property
     *  @param array<JournalLine>|null $value Value to set for the journalLines property.
    */
    public function setJournalLines(?array $value ): void {
        $this->journalLines = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
